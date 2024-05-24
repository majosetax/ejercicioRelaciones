<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('teacher.index', compact('teachers'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Teacher::create($request->all());
        return redirect()->route('teacher.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $teacher = Teacher::find($id);
        return view('teacher.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $teacher = Teacher::find($id);
        return view('teacher.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $teacher = Teacher::find($id);
        $teacher -> update($request->all());
        return redirect()->route('teacher.index');
    }

    /**
     * Remove the specified resource frdom storage.
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('teacher.index');
    }
}
