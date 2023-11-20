<?php

namespace App\Http\Controllers\Admin\Auth;

use App\DTOs\LoginDTO;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Services\Facades\LoginFacade;

class LoginController extends Controller
{
    public function loginForm() {
        return view('admin.auth.login');
    }
    public function login(LoginRequest $request) {
       $logged_in =   LoginFacade::login(LoginDTO::getData($request),'admin');
       return $this->redirect($logged_in);
    }
    public function redirect($logged_in) {
      if($logged_in){
          return redirect(route('customers.index'));
    }
     else{
         return back()->withErrors(['loginFailed' =>'Login Failed !']);
     }
    }
}
