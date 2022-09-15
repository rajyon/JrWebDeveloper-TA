<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function addUser(Request $req){

        $user = new User;
        $user->name = $req -> name;
        $user->email = $req -> email;
        $user->ip_address = $req -> ip_address;
        $result = $user->save();
        if($result){
            return ["Result"=>"Data has been saved"];
        }else{
            return ["Result"=>"Operation Failed."];
        }

    }
    function getUsers(){
        $users = User::all(['name','email','country','city']);
        return $users;
    }
    function getUser(Request $req){
        $user = User::find($req->id, ['name','email','country','city']);
        return $user;
    }
}
