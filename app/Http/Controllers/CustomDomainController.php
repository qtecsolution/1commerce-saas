<?php

namespace App\Http\Controllers;

use App\Models\CustomDomain;
use App\Models\Template\UserTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomDomainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userTemplates = UserTemplate::where('user_id', auth()->user()->id)->get();
        if(count($userTemplates)==0){
            // Alert
            toast('Setup your template first!', 'error');
            // return to tickets
            return redirect()->route('templates.index');
        }
        $domains = CustomDomain::with('userTemplate')->where('user_id',auth()->user()->id)->get();
        return view('customer.domain.index', compact('userTemplates','domains'));
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'domain_name' => [
                'required',
                'unique:custom_domains,domain_name',
                'regex:/^([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,}$/'
            ],
            'user_template_id' => 'required',
        ]);
        try{
            $userTemplate = UserTemplate::where('id', $request->user_template_id)->first();
            $domain = \Str::lower($request->domain_name);
            // Check A Records
            $dnsStatus = $this->checkDnsRecords($domain);
            //Create new domain
            CustomDomain::create([
                'domain_name' => $domain,
                'user_template_id' => $request->user_template_id,
                'user_id' => $userTemplate->user_id,
                'is_verified' => $dnsStatus['status'],
            ]);
            toast('Domain Added.', 'success');
            return redirect()->back();
        } catch (\Exception $e) {
            toast($e->getMessage(), 'error');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(CustomDomain $customDomain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CustomDomain $customDomain)
    {
        // check domain verification and update
        $dnsStatus = $this->checkDnsRecords($customDomain->domain_name);
        $customDomain->update([
            'is_verified' => $dnsStatus['status'],
        ]);
        if($dnsStatus['status'] == 0){
            toast($dnsStatus['message'], 'error');
        }else{
            toast($dnsStatus['message'], 'success');
        }
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CustomDomain $customDomain)
    {
        $validator = Validator::make($request->all(), [
            'update_domain_name' => [
                'required',
                'regex:/^([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,}$/'
            ],
            'user_template_id' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                             ->withErrors($validator)->withInput()
                             ->with('id',$customDomain->id);
        }
        try {
            // Domain convert to lower case
            $domain = \Str::lower($request->update_domain_name);
            // Check A Records
            $dnsStatus = $this->checkDnsRecords($domain);
            $customDomain->update([
                'domain_name' => $domain,
                'user_template_id' => $request->user_template_id,
                'is_verified' => $dnsStatus['status'],
            ]);
            toast('Domain Updated.', 'success');
            return redirect()->back();
        } catch (\Exception $e) {
            toast($e->getMessage(), 'error');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomDomain $customDomain)
    {
        try {
            $customDomain->delete();
            toast('Domain deleted successfully.', 'success');
            return redirect()->back();
        } catch (\Exception $e) {
            toast($e->getMessage(), 'error');
            return redirect()->back();
        }
    }

    /**
     * check Specific A Records
     */
    public function checkDnsRecords($domain)
    {
        $expectedIp = env('SERVER_IP')??'13.235.223.227';

        // Check the A record for '@' (root domain)
         $rootRecords = dns_get_record($domain, DNS_A);
        $rootRecordExists = false;
        foreach ($rootRecords as $record) {
            if ($record['ip'] === $expectedIp) {
                $rootRecordExists = true;
                break;
            }
        }

        // Check the A record for 'www'
        $wwwRecords = dns_get_record('www.' . $domain, DNS_A);
        $wwwRecordExists = false;

        foreach ($wwwRecords as $record) {
            if ($record['ip'] === $expectedIp) {
                $wwwRecordExists = true;
                break;
            }
        }
        // Return the result
        if ($rootRecordExists && $wwwRecordExists) {
            return ['status'=>1,'message' => 'Both A records are correctly configured.'];
        } elseif (!$rootRecordExists && !$wwwRecordExists) {
            return ['status'=>0,'message' => 'Neither A record is correctly configured.'];
        } elseif (!$rootRecordExists) {
            return ['status'=>2,'message' => 'The A record for the root domain (@) is not correctly configured.'];
        } else {
            return ['status'=>3,'message' => 'The A record for www is not correctly configured.'];
        }
    }
}
