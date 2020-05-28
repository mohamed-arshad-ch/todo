<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function home(){

        $todos = Todo::all();
        // dd($todos);

        

        return view('home',['todos'=>$todos]);

    }

 

    public function store(Request $request){

        // dd($request->post('title'));

        $validatedData=$request->validate([

            'title' => 'required|max:100'
        ]);

        Todo::create($validatedData);
        // $todo= new Todo;

        // $todo->title=$request->title;

        // $todo->save();

        return redirect(route('home'));

    }


    public function edit(Todo $id){

        

        // $todo = Todo::findOrFail($id);

       

        // dd($todo);

        return view('update',compact('id'));

    }


    public function update(Request $request,Todo $id){


        $validatedData=$request->validate([

            'title' => 'required|max:100'
        ]);
        $id->update($validatedData);

        // dd($validatedData);
        return redirect(route('home'));




    }
}
