<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    private $rules =[
        'title' => 'required|max:100|string',
        'description' => 'required|string',
        'author' => 'required|string',
        'due_date' => 'required|date'
    ];

    private $custom_msg = [
        'title.required' => "Title is required",
        'description.required' => "Description is required",
    ];

    private function storeOrUpdate($todo,$request){
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->author = $request->author;
        $todo->due_date = $request->due_date;
        $todo->save();
        return back();
    }

    public function store(Request $request)
    {
        $request->validate($this->rules,$this->custom_msg);

        $todo = new Todo();
        $this->storeOrUpdate($todo,$request);
    }

    public function getAllTodo()
    {
        $todos = Todo::latest()->get();
        return view('todo.all', compact('todos'));
    }

    public function edit($id){

        $todo = Todo::find($id);
        return view('todo.edit', compact('todo'));
    }

    public function update(Request $request, $id){
        $request->validate($this->rules,$this->custom_msg);
        $todo = Todo::find($id);
        $this->storeOrUpdate($todo, $request);
    }
}
