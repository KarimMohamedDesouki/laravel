<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('userposts.index');
    }

    public function create()
    {
        return view('userposts.create');
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        return view('userposts.show', ['id'=> $id]);
    }

    public function edit($id)
    {
        return view('userposts.edit', ['edited_id'=> $id]);
    }

    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
