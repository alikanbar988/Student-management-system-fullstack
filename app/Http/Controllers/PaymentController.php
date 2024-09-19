<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\View\View;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PaymentController extends Controller
{
    public function index(request $request) :View
    {
        $payment=Payment::all();
        return view('payments.index')->with('payments',$payment);
    }

    public function create() :View
    {

        $enrollment=Enrollment::pluck('enroll_no','id');
        return view('payments.create')->with('payments',$enrollment);
       
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) :RedirectResponse
    {
        $input=$request->all();
        Payment::create($input);
       // if(!null){
        return redirect('payments')->with('flash_message','payment Added!');
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
    $payment = Payment::find($id);

    // Pass the student to the view
    return view('payments.show')->with('payments',$payment);

    }
    public function edit(string $id)
    {
        $payment=Payment::findOrFail($id);
     //   $enrollment=Enrollment::pluck('enroll_no','id');
        return view('payments.edit')->with('payments',$payment);
    }

    public function update(Request $request ,string $id)
    {
        $payment = Payment::find($id);
        $input=$request->all();
        $payment->update($input);
        return redirect('payments')->with('flash_message','payment Updated!');

    }
    
    public function destroy(string $id)
    {
        $payment = Payment::find($id);
        $payment->delete();
        return redirect('payments')->with('flash_message','payment deleted!');
    }
}
