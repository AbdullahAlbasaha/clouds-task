<?php
namespace App\Services\Contracts;
use App\DTOs\LoginDTO;

interface LoginContract {
    public function login(LoginDTO $loginDTO,$guard ):bool;
 }
