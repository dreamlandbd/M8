<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function index($id){        
        $name = "Donal Trump";
        $age = 75;
        $data = array(
            "id" => $id,
            "name" => $name,
            "age" => $age
        );

        $cookie = Cookie::make('access_token', '123-XYZ', 1, 
        '/', $_SERVER['SERVER_NAME'], false, true);
        
        return response('Cookie Set',200)->withCookie($cookie);        
    }
}