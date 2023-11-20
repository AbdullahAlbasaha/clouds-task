<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Frontend\Auth\RegisterController;
use App\Models\Plan;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlanSubscribeController extends Controller
{
    public function subscribe(Request $request)  {
        $data = session()->get('register');
        $plan = Plan::find($data['plan']);
        if($request->token){
            $customer = new Customer();
            $customer->fill(['name' => $data['name'],'email' => $data['email'],'password' => $data['password']]);
            $customer->newSubscription($data['plan'], $plan->stripe_plan)
            ->create($request->token);
            $customer->save();
        }
        auth('customer')->login($customer);
        return redirect(route('home'));
    }
}
