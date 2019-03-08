<?php
namespace App\Http\Controllers;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
Use Image;
use App\User;
use Auth;
class profilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $profiles=Profile::all();
        
        return view('layouts.app', ['profiles'=>$profiles]);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
            return View('profile');
        
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
        $rules = [
            'telephone'     => 'required|min:10',
            'address'    => 'required',
            'dob'        => 'required',
            'nationality'=> 'required',
            'occupation'=> 'required',
            'level'     =>  'required',
            'skill1'    =>  'required',
            'skill2'    =>  'required',
            'image'     => 'image|mimes:jpeg,png,jpg,gif,svg',
            'skill3'    =>  'required',
            'summary'   =>  'required',
        ];
        $status="updated";

        $validator=Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('profiles/create')
                ->withErrors($validator)
                ->withInput();
        }else{
        $profile= new Profile;
        $profile->telephone = $request->input('telephone');
        $profile->address   = $request->input('address');
        $profile->dob     = $request->input('dob');
        $profile->nationality = $request->input('nationality');
        $profile->occupation = $request->input('occupation');
        $profile->educationallev=$request->input('level');
        $profile->skill1        =$request->input('skill1');
        $profile->skill2        =$request->input('skill2');

       
            $image              =$request->file('image');
            $filename           =time().'.'.$image->getClientOriginalExtension();
            $location           =public_path('img/'.$filename);
            Image::make($image)->resize('300,100', function($c){
            $c->aspectRatio();
            $c->upsize();
            })->save($location);
            $profile->image     =$filename;

            $profile->skill3        =$request->input('skill3');
            $profile->summary       =$request->input('summary');

        if(!$profile){
            $status="create";
        }
     
        if ($profile->save()) {
            session()->flash('status', 'User '.$status.'d successfully');
            return redirect(route('profiles.show',$profile->id ));
        }
        
        session()->flash('status', 'Unable to '.$status.' user. Please try again');
        return back()->withInput();
    

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
        if(Auth::user()){
        $user=User::find($profile);
        $profil=Profile::find($profile);
        return view('finalprofile')->with(compact('profil'))->with(compact('user'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
        if(Auth::user()){
            $user=User::find($profile);
            return view('users.profileupdate')->with('user',$user);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //

        $user=User::find($profile);
        $validator = Validator::make($request->all(), [
            'telephone'     => 'required|min:10',
            'address'    => 'required',
            'dob'        => 'required',
            'nationality'=> 'required',
            'occupation'=> 'required',
            'level'     =>  'required',
            'skill1'    =>  'required',
            'skill2'    =>  'required',
            'skill3'    =>  'required',
            'summary'   =>  'required',
        ]);

        if ($validator->fails()) {
            return redirect('profiles/' . $profile . '/edit')
                        ->withErrors($validator)
                        ->withInput();
        }
        else{


            $profile= new Profile;
        $profile->telephone = $request->input('telephone');
        $profile->address   = $request->input('address');
        $profile->dob     = $request->input('dob');
        $profile->nationality = $request->input('nationality');
        $profile->occupation = $request->input('occupation');
        $profile->educationallev=$request->input('level');
        $profile->skill1        =$request->input('skill1');
        $profile->skill2        =$request->input('skill2');
        $profile->skill3        =$request->input('skill3');
        $profile->summary       =$request->input('summary');
        $profile->save();
        
        session()->flash('status', 'User '.$status.'d successfully');
        return redirect(route('profile'));
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
