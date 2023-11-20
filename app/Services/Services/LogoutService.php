<?php

namespace App\Services\Services;
use App\Services\Contracts\LogoutContract;

class LogoutService implements LogoutContract
{
    public function logout():void {
        auth()->logout();
     }
}
