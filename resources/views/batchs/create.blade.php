@extends('layout')

@section('content')
       
          <div class="card-header">Courses Page</div>
                     <div class="card-body">
                        <form action="{{ url('batchs') }}" method="post">
                           {!! csrf_field()!!}
                            <label>BatchName </label> </br>
                            <input type="text" name="name" id="name" class="form control"></br>
                            <label>CourseName</label> </br>
                           <select id="course_id" name="course_id" class="form control">
                              @foreach($courses as $id => $name )
                              <option value="{{$id}}">{{$name}}</option>
                              @endforeach
                           </select>
                            <label>StartDate </label> </br>
                            <input type="text" name="start_date" id="start_date" class="form control"></br>
                            <input type="submit" value="save" class="btn btn-success"></br>
                            </form>
                     </div>
                     <div>
                     </div>
            
            @stop