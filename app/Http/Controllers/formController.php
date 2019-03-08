<?php
namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\User;

class formController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
       
        $this->middleware('auth', ['except' => ['create']]);
    }

    
    public function index()
    {
        //
        $users = User::latest()->paginate();
        return view('users.all', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.create');
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
            'name'     => 'required|min:4',
            'email'    => 'required|email|unique:users',
            'dob'      =>  'required',
            'telephone'=>  'required',
            'password' => 'required|string|min:6|confirmed',
            
        ];
        $status="update";

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('index/create')
                ->withErrors($validator)
                ->withInput();
        } else {
            // store
            $user = new User;
            $user->name       = $request->input('name');
            $user->email      = $request->input('email');
            $user->dob         = $request->input('dob');
            $user->telephone   = $request->input('telephone');
            $user->password    = $request->input('password');
            

            if(!$user){
                $status="create";
            }
            if ($request->has('password')) {
                $user->password = bcrypt($request->input('password'));
            }
            if ($user->save()) {
                session()->flash('status', 'User '.$status.'d successfully');
                return redirect(route('login'));
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
        $user=User::find($id);
        return view('view')->with('user', $user);
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
        $user=User::find($id);
        return view('users.update')->with('user',$user);
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
        $user=User::find($id);
        $validator = Validator::make($request->all(), [
            'name'     => 'required|min:4',
            'email'    => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return redirect('index/' . $id . '/edit')
                        ->withErrors($validator)
                        ->withInput();
        }
        else{


            $user->name=$request->input('name');
            $user->email=$request->input('email');
            $user->password=bcrypt($request->input('password'));
            $user->save();
        
            session()->flash('status', 'User '.$status.'d successfully');
                return redirect(route('index'));
        }
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
        $user = User::find($id);
        if ($user->delete()) {
            session()->flash('status', 'User deleted successfully');
        } else {
            session()->flash('status', 'Unable to delete user. Please try again');
        }
    
    return back();
    }
}
