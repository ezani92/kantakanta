<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class AdminOrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {  

		$orders = Order::where('id', '>', '0')->paginate(5);
		
		return view('admin.order', ['orders' => $orders]);
    }
}
