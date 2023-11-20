<?php

namespace App\Http\Controllers\Frontend\Auth;


use App\Http\Controllers\Controller;
use App\Services\Contracts\LogoutContract;


class LogoutController extends Controller
{
    public function logout(LogoutContract $logoutContract) {
        $logoutContract->logout();
       return redirect()->route("login");
    }

}
