<?php

namespace App\Http\Repository;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ControllerRepository extends Controller
{
    public static function checkUser($username, $email)
    {
        return DB::connection('mysql')
            ->table('main.users')
            ->where('username', $username)
            ->first();
    }
    public static function createUser($username, $email, $password)
    {
        return DB::connection('mysql')
            ->table('main.users')
            ->insert([
                'username' => $username,
                'email' => $email,
                'password' => $password
            ]);
    }
}

