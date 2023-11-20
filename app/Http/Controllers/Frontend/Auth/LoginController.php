<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\DTOs\LoginDTO;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Services\Facades\LoginFacade;

class LoginController extends Controller
{
    public function loginForm() {
        $show_register_form = false;
        return view('frontend.auth.login',compact('show_register_form'));
    }

    public function login(LoginRequest $request) {
        $customer = $this->getCustomer($request->email);
        if(!empty($customer)) {
            $is_active = $this->check_customer_activation( $customer );
            if(!$is_active) {
                return $this->redirect(false,'Your Account Is Inactive');
            }
        }
        $logged_in =  LoginFacade::login(LoginDTO::getData($request),'customer');
        return $this->redirect($logged_in);
     }
     private function check_customer_activation(Customer $customer) {
        if($customer->activation == 'inactive') {
            return false;
        }else{
            return true;
        }
     }
     private function getCustomer($email):Customer {
        return Customer::whereEmail($email)->first();
     }
     public function redirect($logged_in,$msg = 'Login Failed') {
       if($logged_in){
           return redirect(route('home'));
     }
      else{
          return back()->withErrors(['loginFailed' => $msg]);
      }
     }
}
