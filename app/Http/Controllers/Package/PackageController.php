<?php


namespace App\Http\Controllers\Package;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = Package::all();
        return view('admin.package.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.package.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // data validation
        $request->validate([
            'title' => 'required',
            'price' => 'required|numeric',
            'duration' => 'required|numeric',
        ]);

        // create package
        $pack = new Package();
        $pack->title = $request->input('title');
        $pack->price = $request->input('price');
        $pack->duration = $request->input('duration');

        $features = [];
        for ($i = 0; $i <= 9; $i++) {
            if ($request->input('feature_' . $i) != null) {
                array_push($features, $request->input('feature_' . $i));
            }
        }

        $pack->features = json_encode($features);
        $pack->save();

        // return to packages
        toast('Package created successfully.', 'success');
        return redirect()->route('packages.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Package $package)
    {
        return view('admin.package.edit', compact('package'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Package $package)
    {
         // data validation
         $request->validate([
            'title' => 'required',
            'price' => 'required|numeric',
            'duration' => 'required|numeric',
        ]);
        
        // update package
        $package->title = $request->input('title');
        $package->price = $request->input('price');
        $package->duration = $request->input('duration');

        $features = [];
        for ($i = 0; $i <= 9; $i++) {
            if ($request->input('feature_' . $i) != null) {
                array_push($features, $request->input('feature_' . $i));
            }
        }

        $package->features = json_encode($features);
        $package->save();

        // return to packages
        toast('Package update successfully.', 'success');
        return redirect()->route('packages.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        // delete package
        $package->delete();

        // return back
        return redirect()->route('packages.index');
    }
}
