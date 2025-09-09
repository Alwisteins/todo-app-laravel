<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function index(){
        if (!Auth::check()){
            return redirect('/login')->with("error","Login dulu bre");
        }

        // $todos = Todo::where('user_id', '1')->get();
        $todos = Todo::all();
        return view('todo.index', [
            'todos' => $todos
        ]);
    }

    public function create(){
        return view('todo.create', [

        ]);
    }
}
