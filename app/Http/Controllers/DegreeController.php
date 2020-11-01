<?php

namespace App\Http\Controllers;

use App\Models\Degree;
use Illuminate\Http\Request;

class DegreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'title' => 'Lista de cursos',
            'degrees' => Degree::all(),
        );
        return view('degree.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data = array(
            'title' => 'Criar curso',
        );
        return view('degree.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'unique:degrees', 'max:255'],
            'department' => ['required', 'max:255'],
            'description' => ['required']
        ]);

        $degree = new Degree();
        $degree->name = $request->input('name');
        $degree->department = $request->input('department');
        $degree->description = $request->input('description');
        $degree->save();
        $request->session()->flash('activity', 'Curso criado');
        return redirect('/degree');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = array(
            'title' => Degree::findOrFail($id)->name,
            'degree' => Degree::findOrFail($id),
        );
        return view('degree.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Degree::destroy($id);
        session()->flash('activity', 'Curso apaggado');
        return redirect('/degree');
    }
}
