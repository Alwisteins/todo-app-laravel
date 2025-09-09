<?php

namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function getProfile($name){
        $usersORM = User::with(["todos"])->get();
        $usersQuery = DB::table("users")->get();

        return $usersORM;

        // return view('profile.getProfile', ["name" => $name]);
        // return "Hello $name";
    }
}
