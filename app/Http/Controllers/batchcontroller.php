<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Course;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class batchcontroller extends Controller
{
    public function index(request $request) :View
    {
        $batchs=Batch::all();
        return view('batchs.index')->with('batchs',$batchs);
    }

    public function create() :View
    {

        $courses=Course::pluck('name','id');
        return view('batchs.create')->with('courses',$courses);
       // return view('batchs.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) :RedirectResponse
    {
        $input=$request->all();
        Batch::create($input);
       // if(!null){
        return redirect('batchs')->with('flash_message','batch Added!');
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
    $batch = Batch::find($id);

    // Pass the student to the view
    return view('batchs.show')->with('batchs',$batch);

    }
    public function edit(string $id)
    {
        $batch = Batch::find($id);
        return view('batchs.edit')->with('batchs',$batch);
    }

    public function update(Request $request ,string $id)
    {
        $batch = Batch::find($id);
        $input=$request->all();
        $batch->update($input);
        return redirect('batchs')->with('flash_message','batch Updated!');

    }
    
    public function destroy(string $id)
    {
        $batch = Batch::findOrFail($id);
        $batch->delete();
        return redirect('batchs')->with('flash_message','batch deleted!');
    }
}
