<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modules = Module::all();
        return view('module.index', compact('modules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('module.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Module::create($request->all());
        return redirect()->route('module.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $module = Module::find($id);
        return view('module.show', compact('module'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $module = Module::find($id);
        return view('module.edit', compact('module'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $module = Module::find($id);
        $module -> update($request->all());
        return redirect()->route('module.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Module $module)
    {
        $module->delete();
        return redirect()->route('module.index');
    }
}
