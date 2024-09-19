@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
<div class="card-header"><h5>Courses page</h5></div>
 <div class="card-body">
    <div class="card-body">
        <h3 class="card-title">Name:{{$courses->name}}</h3>
        <h3 class="card-text">Syllabus:{{$courses->syllabus}}</h3>
        <h3 class="card-text">duration:{{$courses->duration()}}</h3>

    </div>
</hr>
</div>
</div>
    </div>
</div>


@endsection