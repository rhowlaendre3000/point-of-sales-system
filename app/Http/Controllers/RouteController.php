<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
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
        $route=Route::all();
        return view('users.route', compact('route'));
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

                'depature' => 'required',
                'arrival'  => 'required',
                'distance' => 'required',
                'regular'  =>  'required',
                'vip'      =>  'required'
        ];


        $status="added";
        $validator=Validator::make($request->all(), $rules);

        if($validator->fails()){
            return redirect('routes/create')
                    ->withErrors($validator)
                    ->withInput();
        }
        else{

                $route= new Route;
                $route->depature = $request->input('depature');
                $route->arrival  = $request->input('arrival');
                $route->distance = $request->input('distance');
                $route->regular  = $request->input('regular');
                $route->vip      = $request->input('vip');
                
                if($route->save()){
                    session()->flash('status', 'Route '.$status.'d successfully');
                    return redirect(route('routes.create' ));
                }
                session()->flash('status', 'Unable to '.$status.' user. Please try again');
                 return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function show(Route $route)
    {
        //
        if(Auth::user()){
            return "i am a winner";
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function edit(Route $route)
    {
        //
        if(Auth::user()){
            $route=Route::find($route);
            return view('users.editroute')->with('route', $route);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        
        //
        $rules=[

                'depature' => 'required',
                'arrival'  => 'required',
                'distance' => 'required',
                'regular'  =>  'required',
                'vip'      =>  'required'
        ];


      
        $status="updated";
        $validator=Validator::make($request->all(), $rules);

       
                $routes = Route::find($id);
                $routes->depature = $request->input('depature');
                $routes->arrival  = $request->input('arrival');
                $routes->distance = $request->input('distance');
                $routes->regular  = $request->input('regular');
                $routes->vip      = $request->input('vip');
                $routes->save();

                session()->flash('status', 'Route '.$status.'d successfully');
                return redirect(route('routes.create'));

                
        

    }

    /**
     * Remove the specified resource from storage.
     *
     
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $routes = Route::find($id);
        $del= $routes->delete();
        if($del){
            session()->flash('status', 'Route deleted successfully');
        } else {
            session()->flash('status', 'Unable to delete Route. Please try again');
        }
    
    return back();
        }
    
}
