<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Ticket;
use App\Route;
use App\Train;
use App\User;
use Auth;
use PDF;

class ticketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $ticket = Ticket::all();
        $train = Train::all();
        $route = Route::all();
        return view('users.ticket')->with(compact('train'))
        ->with(compact('ticket'))
        ->with(compact('route'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $rules=[
            'name'=>'required',
            'telephone'=>'required',
            'train'    =>'required',
            'route' =>  'required',
            'tickettype'=>'required',
            'price'=>'required'
        ];

        $status="created";

        $validator=Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('tickets/create')
                ->withErrors($validator)
                ->withInput();
        }else{
            $ticket = new Ticket;

            $ticket->name = $request->input('name');
            $ticket->telephone = $request->input('telephone');
            $ticket->train = $request->input('train');
            $ticket->route = $request->input('route');
            $ticket->tickettype = $request->input('tickettype');
            $ticket->price = $request->input('price');
            $ticket->seller = Auth::user()->name;
            $ticket->sales_id = "2019".str_random(4);
            $ticket->ticket_id = "TI".$ticket->sales_id;
            if($ticket->save()){
                session()->flash('status', 'Ticket '.$status.'d successfully');
                return redirect(route('tickets.create'));
            }
            else{
                session()->flash('status', 'Unable to '.$status.' Ticket. Please try again');
                return back()->withInput();
            }

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        //
        //$ticket = new Ticket;
      
        if(Auth::user()){
           
            $ticket = Ticket::find($ticket);
            return view('users.ticketout') ->with('ticket', $ticket);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function generatePDF(){


        $data = ["title" => "welcome to PDF"];
        $pdf  = PDF::loadView('users.ticketout', $data);

        return $pdf->download('newoneshere.pdf');
    }
}
