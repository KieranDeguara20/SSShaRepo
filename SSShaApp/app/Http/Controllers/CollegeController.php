<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\College;

class CollegeController extends Controller
{
    public function index() {
        $colleges = College::orderBy('name')->pluck('name', 'id')->prepend('All Colleges', '');
        if (request('college_id') == null){
            $colleges= College::orderBy('name')->get();
        } else{
            $colleges = College::where('college_id', request('college_id'))->get();
        }
        return view('colleges.index', compact('colleges'));
    }

    public function create() {
        return view('colleges.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|unique:colleges,name',
            'address' => 'required'
        ]);
    
        College::create($request->all());
        return redirect()->route('colleges.index')->with('message', 'College created successfully');
    }

    public function edit($id) {
        $college = College::findOrFail($id);
        return view('colleges.edit', compact('college'));
    }


    public function editColleges(Request $request){
        $request->validate([
            'name'=>'required|unique:colleges',
            'address'=>'required',
        ]);

        College::create($request->all());
        return redirect()->route('colleges.index')->with('message', 'College has been added successfully!');
    }

    public function view($id) {
        $college = College::findOrFail($id);
        return view('colleges.view', compact('college'));
    }

    public function destroy($id) {
        College::destroy($id);
        return redirect()->route('colleges.index')->with('message', 'College deleted successfully');
    }
}