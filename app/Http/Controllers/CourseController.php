<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class CourseController extends Controller
{
    public function index(request $request) :View
    {
        $course=Course::all();
        return view('courses.index')->with('courses',$course);
    }

    public function create() :View
    {
        return view('courses.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) :RedirectResponse
    {
        $input=$request->all();
        Course::create($input);
       // if(!null){
        return redirect('courses')->with('flash_message','Student Added!');
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
    $course = Course::find($id);

    // Pass the student to the view
    return view('courses.show')->with('courses',$course);

    }
    public function edit(string $id)
    {
        $course=Course::find($id);
        return view('courses.edit')->with('courses',$course);
    }

    public function update(Request $request ,string $id)
    {
        $course=Course::find($id);
        $input=$request->all();
        $course->update($input);
        return redirect('courses')->with('flash_message','course Updated!');

    }
    
    public function destroy(string $id)
    {
        $course=Course::find($id);
        $course->delete();
        return redirect('courses')->with('flash_message','course deleted!');
    }
}
