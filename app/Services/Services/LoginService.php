<?php

namespace App\Services\Services;

use App\DTOs\LoginDTO;
use App\Services\Contracts\LoginContract;

class LoginService implements LoginContract
{
    public function login(LoginDTO $loginDTO,$guard):bool{
        if(auth($guard)->attempt(["email"=> $loginDTO->email,"password"=> $loginDTO->password])){
            return true;
        }
        return false;
    }
}
