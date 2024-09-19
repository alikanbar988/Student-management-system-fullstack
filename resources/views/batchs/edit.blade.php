@extends('layout')

@section('content')
       
          <div class="card-header">batch </div>
                     <div class="card-body">
                        <form action="{{ url('/batchs/'.$batchs->id) }}" method="post">
                           {!! csrf_field()!!}
                           @method('PATCH')
                           <input type="hidden" name="id" id="id" value="{{$batchs->id}} id="id" />
                            <label>Name </label> </br>
                            <input type="text" name="name" id="name" value="{{$batchs->name}}" class="form control"></br>
                            <label>Course Name</label> </br>
                            <input type="text" name="course->name" id="course_id"  value="{{$batchs->course->name}}" class="form control"></br>
                            <label>Start Date </label> </br>
                            <input type="text" name="start_date" id="start_date" value="{{$batchs->start_date}}" class="form control"></br>
                            <input type="submit" value="Update" class="btn btn-success"></br>
                            </form>
                     </div> 
                     <div>
                     </div>
            
            @stop