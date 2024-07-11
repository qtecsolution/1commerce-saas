<?php

namespace App\Http\Controllers\Ticket;

use App\Http\Controllers\Controller;
use App\Models\SupportTicket;
use App\Models\SupportTicketMessage;
use Illuminate\Http\Request;
use PHPUnit\Framework\Attributes\Ticket;

class SupportTicketController extends Controller
{
    // function to show admin support tickets
    public function tickets()
    {
        $tickets = SupportTicket::with(['support'])->get();
        return view('admin.ticket.tickets', compact('tickets'));
    }


    // function to show admin inspect ticket
    public function inspectTicket($id)
    {
        $item = SupportTicket::with(['messages'])->find($id);
        return view('admin.ticket.inspect-ticket', compact('item'));
    }

    // function to show customer inspect ticket
    public function customerInspectTicket($id)
    {
        $item = SupportTicket::with(['messages'])->find($id);
        return view('customer.ticket.inspect-ticket', compact('item'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = SupportTicket::where('user_id', auth()->id())->get();
        return view('customer.ticket.tickets', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // data validation
        $request->validate([
            'ticket_subject' => 'required',
            'ticket_note' => 'required',
            'image' => 'nullable|mimes:png,jpg,jpeg|max:1000',
        ]);

        // create ticket
        $ticket = new SupportTicket();
        $ticket->user_id = auth()->id();
        $ticket->ticket_number = rand(11111, 99999);
        $ticket->ticket_subject = $request->input('ticket_subject');

        if ($request->hasFile('image')) {
            $request->file('image')->store('public/tickets');
            $path = 'tickets/' . $request->file('image')->hashName();

            $ticket->image = $path;
        }

        $ticket->ticket_note = $request->input('ticket_note');
        $ticket->save();

        // Alert
        toast('Ticket created successfully.', 'success');

        // return to tickets
        return redirect()->route('tickets.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(SupportTicket $supportTicket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SupportTicket $supportTicket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // data validation
        $request->validate([
            'ticket_subject' => 'required',
            'ticket_note' => 'required',
            'image' => 'nullable|mimes:png,jpg,jpeg|max:1000',
        ]);

        // update ticket
        $supportTicket = SupportTicket::find($id);
        $supportTicket->ticket_subject = $request->input('ticket_subject');

        if ($request->hasFile('image')) {
            $request->file('image')->store('public/tickets');
            $path = 'tickets/' . $request->file('image')->hashName();

            $supportTicket->image = $path;
        }

        $supportTicket->ticket_note = $request->input('ticket_note');
        $supportTicket->save();

        // return to tickets
        toast('The ticket is updated successfully.', 'success');
        return redirect()->route('tickets.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // delete ticket
        $supportTicket = SupportTicket::find($id);
        $supportTicket->delete();

        // return back
        toast('The ticket is deleted successfully.', 'success');
        return redirect()->back();
    }

    // function to delete admin support ticket
    public function delete($id)
    {
        SupportTicket::find($id)->delete();
        // return back
        toast('The ticket is deleted successfully.', 'success');
        return redirect()->back();
    }

    // function to change support ticket status
    public function status($id, $status)
    {
        $support = SupportTicket::find($id);
        if ($support->status == $status) {

            toast('Already Updated.', 'error');
            return redirect()->back();
        } else {
            $support->status = $status;
            $support->save();

            toast('Updated Succesfully.', 'success');
            return redirect()->back();
        }
    }

    // function to create admin support ticket reply
    public function replyTicket(Request $request)
    {
        $ticket = SupportTicket::find($request->ticket_id);
        if ($ticket->status == 1) {
            $ticket->status = 2;
            $ticket->replied_by = auth()->id();
            $ticket->replied_on = now();
            $ticket->save();
        }

        if ($request->hasFile('image')) {
            $request->file('image')->store('public/tickets-replies');
            $path = 'tickets-replies/' . $request->file('image')->hashName();
        } else {
            $path = null;
        }

        SupportTicketMessage::create([
            'support_ticket_id' => $ticket->id,
            'message' => $request->message,
            'attachments' => $path,
            'parent_id' => 1,
        ]);

        toast('Replied successfully.', 'success');
        return redirect()->back();
    }

    // function to customer support ticket reply
    public function customerReplyTicket(Request $request)
    {
        if ($request->hasFile('image')) {
            $request->file('image')->store('public/tickets-replies');
            $path = 'tickets-replies/' . $request->file('image')->hashName();
        } else {
            $path = null;
        }

        SupportTicketMessage::create([
            'support_ticket_id' => $request->ticket_id,
            'message' => $request->message,
            'attachments' => $path,
            'parent_id' => 0,
        ]);

        toast('Replied successfully.', 'success');
        return redirect()->back();
    }
}
