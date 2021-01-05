<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use Session;

class TodosController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todos')->with('todos', $todos);
    }


    public function store(Request $request)
    {

        $countTodos = Todo::all()->count();
        if ($countTodos < 10) {
            $todo = new Todo;

            $todo->todo = $request->todo;

            $todo->save();
            Session::flash('success', 'Your todo was created. ');
        } else {
            Session::flash('success', 'You cannot create anymore tasks. Delete some first. ');
        }


        return redirect()->back();
    }

    public function delete($id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        Session::flash('success', 'Your todo was deleted.');
        return redirect()->back();
    }

    public function update($id)
    {
        $todo = Todo::find($id);

        return view('update')->with('todo', $todo);
    }


    public function save(Request $request, $id)
    {
        $todo = Todo::find($id);
        $todo->todo = $request->todo;
        $todo->save();

        // return redirect()->back();

        Session::flash('success', 'Your todo was updated.');
        return redirect(route('todo'));
    }

    public function complete($id)
    {

        $todo = Todo::find($id);
        $todo->completed = 1;
        $todo->save();

        // return redirect()->back();

        Session::flash('success', 'Your todo was completed.');
        return redirect()->back();
    }
}
