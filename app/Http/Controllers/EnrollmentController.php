<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Student;
use Illuminate\View\View;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class EnrollmentController extends Controller
{
    public function index(request $request) :View
    {
        $enrollment=Enrollment::all();
        return view('enrollments.index')->with('enrollments',$enrollment);
    }

    public function create() :View
    {
        $batchs=Batch::pluck('name','id');
        $students=Student::pluck('name','id');
        return view('enrollments.create',compact('batchs','students'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) :RedirectResponse
    {
        $input=$request->all();
        Enrollment::create($input);
       // if(!null){
        return redirect('enrollments')->with('flash_message','enrollment Added!');
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
           $enrollment=Enrollment::find($id);

    // Pass the student to the view
    return view('enrollments.show')->with('enrollments',$enrollment);

    }
    public function edit(string $id)
    {
        $enrollment=Enrollment::find($id);
        return view('enrollments.edit')->with('enrollments',$enrollment);
    }

    public function update(Request $request ,string $id)
    {
        $enrollment=Enrollment::find($id);
        $input=$request->all();
        $enrollment->update($input);
        return redirect('enrollments')->with('flash_message','enrollment Updated!');

    }
    
    public function destroy(string $id)
    {
        $enrollment=Enrollment::find($id);
        $enrollment->delete();
        return redirect('enrollments')->with('flash_message','enrollment deleted!');
    }
}
