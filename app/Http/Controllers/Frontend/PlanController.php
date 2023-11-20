<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Frontend\Singleton\RegisterSingleton;
use App\Models\Customer;
use App\Models\Plan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlanController extends Controller
{
   public function index() {
     $plans = Plan::all();
        return view('frontend.plans',compact('plans'));
    }
    public function choose_plan(Request $request) {
        $data = session('register');
        $data += ['plan' => $request->plan];
        session(['register' => $data]);
        $intent = (new Customer)->createSetupIntent();
        return view('frontend.payment',compact('data','intent'));
    }
}
