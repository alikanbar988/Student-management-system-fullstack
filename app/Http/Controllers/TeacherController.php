<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class TeacherController extends Controller
{
    public function index(request $request) :View
    {
        $teacher=Teacher::all();
        return view('teachers.index')->with('teachers',$teacher);
    }

    public function create() :View
    {
        return view('teachers.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) :RedirectResponse
    {
        $input=$request->all();
        Teacher::create($input);
       // if(!null){
        return redirect('teachers')->with('flash_message','teachers Added!');
      //  }else{
         //   return redirect('students')->with('flash_message','Student Not Added!');
       // }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
           // Retrieve the student by ID
    $teacher = Teacher::find($id);

    // Pass the student to the view
    return view('teachers.show')->with('teachers',$teacher);

    }
    public function edit(string $id)
    {
        $teacher=Teacher::find($id);
        return view('teachers.edit')->with('teachers',$teacher);
    }

    public function update(Request $request ,string $id)
    {
        $teacher=Teacher::find($id);
        $input=$request->all();
        $teacher->update($input);
        return redirect('teachers')->with('flash_message','teacher Updated!');

    }
    
    public function destroy(string $id)
    {
        $teacher=Teacher::find($id);
        $teacher->delete();
        return redirect('teachers')->with('flash_message','Student deleted!');
    }
}
