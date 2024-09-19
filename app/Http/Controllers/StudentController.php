<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;



class StudentController extends Controller
{
    public function index(request $request) :View
    {
        $students=Student::all();
        return view('students.index')->with('students',$students);
    }

    public function create() :View
    {
        return view('students.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) :RedirectResponse
    {
        $input=$request->all();
        Student::create($input);
       // if(!null){
        return redirect('students')->with('flash_message','Student Added!');
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
    $student = Student::find($id);

    // Pass the student to the view
    return view('students.show')->with('students',$student);

    }
    public function edit(string $id)
    {
        $student=Student::find($id);
        return view('students.edit')->with('students',$student);
    }

    public function update(Request $request ,string $id)
    {
        $student=Student::find($id);
        $input=$request->all();
        $student->update($input);
        return redirect('students')->with('flash_message','Student Updated!');

    }
    
    public function destroy(string $id)
    {
        $student=Student::find($id);
        $student->delete();
        return redirect('students')->with('flash_message','Student deleted!');
    }
}
