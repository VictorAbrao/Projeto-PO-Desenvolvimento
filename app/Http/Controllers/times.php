<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class times extends Controller
{
    public function index()
    {
        $times = Time::orderBy('created_at', 'desc')->paginate(10);
        return view('times.index',['times' => $times]);
    }
  
    public function create()
    {
        return view('times.create');
    }
  
    public function store(TimeRequest $request)
    {
        $times = new Time;
        $times->nome        = $request->nome;
        $times->descricao = $request->descricao;
        $times->save();
        return redirect()->route('times.index')->with('message', 'Time created successfully!');
    }
  
    public function show($id)
    {
        //
    }
  
    public function edit($id)
    {
        $times = Time::findOrFail($id);
        return view('times.edit',compact('time'));
    }
  
    public function update(TimeRequest $request, $id)
    {
        $times = Time::findOrFail($id);
        $times->nome        = $request->nome;
        $times->descricao = $request->descricao;
        $times->save();
        return redirect()->route('times.index')->with('message', 'Time updated successfully!');
    }
  
    public function destroy($id)
    {
        $times = Time::findOrFail($id);
        $times->delete();
        return redirect()->route('times.index')->with('alert-success','Time hasbeen deleted!');
    }
}
