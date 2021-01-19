<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Order;
use App\Pay;
class PushController extends Controller

 {
    public function index()

    {
      $order = Order::get();
      return view('site.cart.push');
    }
    public function paypal(Request $request)
    {
        $roles = [
          'name' => 'required',
          'number' => 'required',
        ];
        $this->validate($request, $roles);
        $pay = new Pay();
        $pay->number = $request->number;

        $pay->name = "P- ".$request->name;

        $pay->user_id = auth()->user()->id;
        $pay->save();

      return view('site.cart.success');
    }

    public function card(Request $request)
    {
        $roles = [
          'number' => 'required',
          'name' => 'required',
        ];
        $this->validate($request, $roles);
        $pay = new Pay() ;
        $pay->number = $request->number;

        $pay->name = "C- ".$request->name;

        $pay->user_id = auth()->user()->id;
        $pay->save();

      return view('site.cart.success');
    }




    
    public function end(Request $request)
    {
      
        $roles = [
          'number' => 'required',
        ];
        $this->validate($request, $roles);

        $pay = new Pay();
        $pay->number = "0";

        $pay->name = "عند الاستلام ";

        $pay->user_id = auth()->user()->id;
        $pay->save();

      return view('site.cart.success');
    }
  }
