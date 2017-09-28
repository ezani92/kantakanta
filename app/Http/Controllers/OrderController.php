<?php

namespace App\Http\Controllers;

use Request;
use App\Order;
use App\User;
use App\Http\Requests\CreateOrderRequest;
use App\Mail\Welcome;
use App\Mail\NewOrder;
use Mail;
use Nexmo;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
       
       $currentuser = \Auth::user();
       

		$orders = Order::where('doctor_id', '=', $currentuser->id)->paginate(5);
		
		return view('doctor.orderindex', ['orders' => $orders]);
    }
    
    public function show($id)
    {       

		$order = Order::find($id);
		
		return view('doctor.ordershow', compact('order'));
    }
    
    public function add()
    {
		return view('doctor.orderadd');   
    }


    
    public function store(CreateOrderRequest $request)
    {
	    $input = Request::all();
	    
	    $user = User::where('email', '=',  Request::get('patient_email'))->first();
	    
		if ($user === null)
		{
		   // user doesn't exist then we create 1 first

			$user = new User;
	    
		    $user->name = $input['patient_name'];
		    $user->email = $input['patient_email'];
		    $user->password = bcrypt('123456');
		    $user->guard = 4;
		    
		    $user->save();
		    
		    Mail::to($user)->send(new Welcome($user));

		    $user = User::where('email', '=',  Request::get('patient_email'))->first();

		    $sur = explode("-", $input['surgery_date']);
			$surgery_date = mktime(0,0,0,$sur[1],$sur[2],$sur[0]);
			
			
			$order = new Order;
	    
		    $order->patient_id = $user->id;
		    $order->doctor_id = \Auth::id();
		    $order->stockist_id = '9';
		    $order->surgery_date = $surgery_date;
		    $order->surgery_state = $input['surgery_state'];
		    $order->surgery_hospital = $input['surgery_hospital'];
		    $order->surgery_eyes = $input['surgery_eye'];
		    $order->surgery_procedure = $input['procedure'];
		    $order->product_brand = '9';
		    $order->product_brand_type = '9';
		    $order->product_power = $input['power'];
		    $order->product_option = '9';
		    $order->product_backup = '9';
		    $order->price = $input['total_amount'];
		    
		    $order->save();

		    $content = [
    		'user'=> $user, 
    		'order'=> $order
    		];


		    Mail::to($user)->send(new NewOrder($content));

		    Nexmo::message()->send([
			    'to' => '60129718420',
			    'from' => 'NEXMO',
			    'text' => 'You have a new order on KantaKanta. Please check your email'
			]);
		    
		    return redirect('doctor/order');
	    
		}
	    else
		{
			
			$sur = explode("-", $input['surgery_date']);
			$surgery_date = mktime(0,0,0,$sur[1],$sur[2],$sur[0]);
			
			
			$order = new Order;
	    
		    $order->patient_id = $user->id;
		    $order->doctor_id = \Auth::id();
		    $order->stockist_id = '9';
		    $order->surgery_date = $surgery_date;
		    $order->surgery_state = $input['surgery_state'];
		    $order->surgery_hospital = $input['surgery_hospital'];
		    $order->surgery_eyes = $input['surgery_eye'];
		    $order->surgery_procedure = $input['procedure'];
		    $order->product_brand = '9';
		    $order->product_brand_type = '9';
		    $order->product_power = $input['power'];
		    $order->product_option = '9';
		    $order->product_backup = '9';
		    $order->price = $input['total_amount'];
		    

		    $order->save();
		    
		    return redirect('doctor/order');
		}
	    
    }
}





