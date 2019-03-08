<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


use Auth;
use App\Train;
class trainsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       
        return view('users.trains', compact('train'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $train=Train::all();
        return view('users.trains', compact('train'));
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
            'type'=>'required',
            'total'=>'required'
        ];

        $status="added";

        $validator=Validator::make($request->all(),$rules);

        if ($validator->fails()) {
            return redirect('trains/create')
                ->withErrors($validator)
                ->withInput();
        }else{
        $train= new Train;
        $train->name = $request->input('name');
        $train->type   = $request->input('type');
        $train->total     = $request->input('total');


        if ($train->save()) {
            session()->flash('status', 'Train '.$status.'d successfully');
            return redirect(route('trains.create',$train->id ));
        }
        
        session()->flash('status', 'Unable to '.$status.' user. Please try again');
        return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        if(Auth::user()){
            return "i am a winner";
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
    * @param  \App\Train  $train
     * @return \Illuminate\Http\Response
     */
    public function edit(Train $train)
    {
        //
        if(Auth::user()){
            $trains=Train::find($train);
            return view('users.edittrain')->with('trains', $trains);
        }
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

        $rules=[
            'name'=>'required',
            'type'=>'required',
            'total'=>'required'
        ];


  
    $status="updated";
    $validator=Validator::make($request->all(), $rules);

   
            $train = Train::find($id);
            $train->depature = $request->input('name');
            $train->arrival  = $request->input('type');
            $train->distance = $request->input('total');
            $train->save();

            session()->flash('status', 'Train '.$status.'d successfully');
            return redirect(route('train.create'));

            
    

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
        $train = Train::find($id);
        $del= $train->delete();
        if($del){
            session()->flash('status', 'Train deleted successfully');
        } else {
            session()->flash('status', 'Unable to delete Route. Please try again');
        }
    
    return back();
        }


        
    
}
