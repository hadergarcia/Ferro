<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ticket;
use App\Http\Requests\TicketRequest;

class TicketController extends Controller
{
    public function index()
    {
        $tickest = ticket::orderby('id', 'DESC')->paginate(5);
        return view('tickest.index', compact('tickest'));
    }

    public function create()
    {
        return view('tickest.create');
    }
    
    public function store(TicketRequest $request)
    {
        $ticket = new ticket;

        $ticket->name  = $request->name;
        $ticket->short = $request->short;
        $ticket->body  = $request->body;

        $ticket->save();

        return redirect()->route('tickest.index')
                        ->with('info', 'El ticket fue guardado');     
    }

    public function edit($id)
    {
        $ticket = ticket::find($id);
        return view('tickest.edit', compact('ticket'));
    }

    public function update(TicketRequest $request, $id)
    {
        $ticket = ticket::find($id);

        $ticket->name  = $request->name;
        $ticket->short = $request->short;
        $ticket->body  = $request->body;

        $ticket->save();

        return redirect()->route('tickest.index')
                        ->with('info', 'El ticket fue actualizado');   
    }

    public function show($id)
    {
        $ticket = ticket::find($id);
        return view('tickest.show', compact('ticket'));
    }

    public function destroy($id)
    {
        $ticket = ticket::find($id);
        $ticket->delete();

        return back()->with('info', 'El ticket fue eliminado');
    }
}
