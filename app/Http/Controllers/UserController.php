<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // Create a POST API endpoint that accepts 3 parameters: name, email, ip_address.
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
    // Create a GET API endpoint that returns all of the users with name, email, country and city fields.
    function getUsers(){
        $users = User::all(['name','email','country','city']);
        return $users;
    }
    // Create a GET API endpoint that returns a user by ID with name, email, country and city fields.
    function getUser(Request $req){
        $user = User::find($req->id, ['name','email','country','city']);
        return $user;
    }
}
