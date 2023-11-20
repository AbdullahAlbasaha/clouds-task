<?php

namespace App\Http\Controllers\Admin\Auth;

use App\DTOs\LoginDTO;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Services\Contracts\LogoutContract;

class LogoutController extends Controller
{
    public function logout(LogoutContract $logoutContract) {
        $logoutContract->logout();
       return redirect()->route("admin.login");
    }

}
