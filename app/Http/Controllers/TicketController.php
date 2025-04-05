<?php

namespace App\Http\Controllers;

use App\Models\Priority;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function create()
    {
        return view('ticket.create', [
            'priorities' => Priority::all()
        ]);
    }
    public function store(Request $request)
    {
        Ticket::create($request->all());
        return redirect()->route('ticket.index');
    }
    public function index()
    {
        return view('ticket.index', [
            'tickets' => Ticket::all()
        ]);
    }

}
