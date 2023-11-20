<?php
namespace App\DTOs;
use App\Http\Requests\updateCustomerRequest;
class UpdateCustomerDTO{
    function  __construct(
        public string $name,
        public string $email,
        public  $password = null,
        ) {

    }
    public static function getData(updateCustomerRequest $request): self {
        return new self(
            $request->name,
            $request->email,
            $request->password,
            ) ;
    }
}
