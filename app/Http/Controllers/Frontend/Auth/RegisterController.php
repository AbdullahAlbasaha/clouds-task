<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Http\Controllers\Frontend\Singleton\RegisterSingleton;

class RegisterController extends Controller
{
    public function registerForm()  {
       $show_register_form =true;
        return view('frontend.auth.register',compact('show_register_form'));
    }
    public function register(RegisterRequest $request){
        session(['register' => [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]]);
       return redirect(route('plans'));
    }

    public static function complete_register($data){
        $customer = Customer::create(['name' => $data['name'],'email' => $data['email'],'password' => $data['password']]);
        return auth('customer')->login($customer);
    }
}
