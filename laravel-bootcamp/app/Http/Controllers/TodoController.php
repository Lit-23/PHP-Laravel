<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Todo;

class TodoController extends Controller
{
    public function display(){
        return view('todo')->with('todos', Todo::all());
    }

    public function create(Request $request){
        $todo = new Todo();
        $todo->content = "Test Content";
        $todo->status = "pending";
        $todo->save();

        return redirect()->route('home');
    }
}
