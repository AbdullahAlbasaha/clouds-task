<?php
namespace App\DTOs;
use App\Http\Requests\LoginRequest;
class LoginDTO{
    function  __construct(public string $email,public string $password) {

    }
    public static function getData(LoginRequest $request): self {
        return new self($request->email,$request->password) ;
    }
}
