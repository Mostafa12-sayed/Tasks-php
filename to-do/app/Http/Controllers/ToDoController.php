<?php

namespace App\Http\Controllers;

use App\Models\ToDO;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = ToDO::all();
        return view('todo.index',['todos'=>$todos]);
    }


    public function create()
    {
        return view('todo.create' , ['todo' => new ToDO()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' =>'required|max:255',
            'description' =>'required',
        ]);

        ToDO::create($request->all());

        return redirect()->route('todo.index')
        ->with($this->message( 'created'));

        
    }
    public function edit(ToDO $todo)
    {
        return view('todo.edit', ['todo' => $todo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ToDO $todo)
    {
        $request->validate([
            'title' =>'required|max:255',
            'description' =>'required',
        ]);
        $todo->update($request->all());
        return redirect()->route('todo.index')
        ->with($this->message( 'updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // dd(vars: $id);
        ToDO::destroy($id);
        return redirect()->back()
        ->with($this->message( message: 'deleted'));
    }
    public function trush()
    {

        return view('todo.trush', ['todos' => ToDO::onlyTrashed()->get()]);
    }


    public function restore($id)
    {
        ToDO::withTrashed()->where('id', $id)->restore();
        return redirect()->route('todo.index')
        ->with($this->message( 'restored'));
    }

    public function forceDelete($id)
    {
        ToDO::withTrashed()->where('id', $id)->forceDelete();
        return redirect()->back()
        ->with($this->message( 'permanently deleted'));
         
    }
    public function message($message)
    {
        return [
            'success' => " Todo {$message} successfully."
        ];
    }
}
