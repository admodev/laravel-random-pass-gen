<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PasswordGeneratorController extends Controller
{
    protected $password_generator;

    public function __construct(Str $pass)
    {
        $this->password_generator = $pass;
    }

    public function GenerateRandomPass()
    {
        $random_password = $this->password_generator->password(
            16,
            true,
            true,
            false,
            false
        );

        return ["generated_password" => $random_password];
    }
}
