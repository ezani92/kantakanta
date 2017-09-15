<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests\CreateUserRequest;

use app\User;
use Session;
use App\Mail\Welcome;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
    }
    
    public function list()
    {
        $users = \DB::table('users')->latest()->paginate(5);
        
        return view('admin.userlist', ['users' => $users]);
    }
    
    public function add()
    {
	    return view('admin.add');
    }
    
    public function show($id)
    {
	    $user = User::find($id);
	    
	    return view('admin.userview', compact('user'));
    }
    
    public function destroy($id)
    {
	    $user = User::find($id);
	    
	    $user->delete();
	    
	    Session::flash('message', 'User Succesfully Deleted!'); 
		Session::flash('alert-class', 'alert-success');
	    
	    return redirect('admin/user');
    }
    
    public function store(CreateUserRequest $request)
    {
	    $input = Request::all();
	  
	    
	    $user = new User;
	    
	    $user->name = $input['name'];
	    $user->email = $input['email'];
	    $user->password = bcrypt('123456');
	    $user->guard = $input['usertype'];
	    
	    $user->save();
	    
	    \Mail::to($user)->send(new Welcome($user));
	    
	    return redirect('admin/user');
    }
    
    
}
