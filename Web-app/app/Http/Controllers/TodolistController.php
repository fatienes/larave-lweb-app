<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todolists = Todolist::all();
        return view ('todolist', compact('todolists'));
    }


    public function store(Request $request)
    {
        $data=$request->validate([
            'content'=>'required'
        ]);
        Todolist::create($data);
        return back();
       
    }


    public function destroy(Todolist $todolist)
    {
        $todolist->delete();
        return back();
    }
}
