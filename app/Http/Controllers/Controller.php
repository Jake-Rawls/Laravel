<?php

namespace App\Http\Controllers;

use App\Http\Repository\ControllerRepository;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function index()
    {
        return view('welcome');
    }


    /**
     * @param Request $request
     */
    public function addUser(Request $request)
    {
        $username = $request->get('username');
        $email = $request->get('username');
        $password = $request->get('password', 'password');
        $exists = ControllerRepository::checkUser($username, $email);
        if ($exists) {
            echo "Username already exists";
        } else {
            ControllerRepository::createUser($username, $email, $password);
        }
    }
}
