<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MyController extends Controller
{
 public Function logout(){
    @auth()->logout();
    return redirect('/');
 }

   public Function register(Request $requist){
    $data=$requist->validate([ 
     "name"=>"required",
     "email"=>"required",
     "city"=>"city",
     "password"=>["required","min:7","max:29"]
    ]);
    $data["password"]=bcrypt($data["password"]);
   $user= User::create($data);
   @auth()->login($user);
   return redirect('/');
   
   }
}
