<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function index(){
        $todos = Todo::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();
        //$todos = Todo::all();
        return view('todo.index', [
            'todos' => $todos
        ]);
    }

    public function detail($id) {
        $todo = Todo::find($id);
        return view('todo.detail', [
            'todo' => $todo
        ]);
    }

    public function create(){
        return view('todo.create', [

        ]);
    }

    public function getPesanError (): array {
        return [
            'title.required' => 'Title harus diisi.',
            'title.min' => 'Title minimal 3 karakter.',
            'body.required' => 'Body harus diisi.',
        ];
    }

    public function handleCreate(Request $request){
        $request->validate([
            'title' => 'required|min:3',
            'body' => 'required',
        ],  $this->getPesanError());

        // $todo = new Todo();
        // $todo->user_id = Auth::user()->id;
        // $todo->title = $request->title;
        // $todo->body = $request->body;
        // $todo->save();

        Todo::create([
            'title'=> $request->title,
            'body'=> $request->body,
            'user_id'=> Auth::user()->id
        ]);

        return redirect()->route('todo.index');
    }

    public function edit($id){
        $todo = Todo::findOrFail(intval($id));
        return view('todo.edit', [
            'todo' => $todo
        ]);
    }

    public function handleEdit(Request $request, $id) {
        $request->validate([
            'title' => 'required|min:3',
            'body' => 'required',
        ], $this->getPesanError());

        $todo = Todo::findOrFail(intval($id));

        $todo->update([
            'title'=> $request->title,
            'body'=> $request->body
        ]);

        return redirect()->route('todo.index');
    }

    public function handleDelete($id){
        $todo = Todo::findOrFail($id);
        $todo->delete();
        return redirect()->route('todo.index');
    }
}
