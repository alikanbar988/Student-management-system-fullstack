@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
<div class="card-header"><h5>Enrollments </h5></div>
 <div class="card-body">
    <div class="card-body">
        <h3 class="card-title">Enroll No:{{$enrollments->enroll_no}}</h3>
        <h3 class="card-text">Batch:{{$enrollments->batch->name}}</h3>
        <h3 class="card-text">Student:{{$enrollments->student->name}}</h3>
        <h3 class="card-text">Join Date:{{$enrollments->join_date}}</h3>
        <h3 class="card-text">Fee:{{$enrollments->Fee}}</h3>
    </div>
</hr>
</div>
</div>
    </div>
</div>


@endsection