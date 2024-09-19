@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
<div class="card-header"><h5>Batches </h5></div>
 <div class="card-body">
    <div class="card-body">
        <h3 class="card-title">Name:{{$batchs->name}}</h3>
        <h3 class="card-text">Course Name:{{$batchs->course->name}}</h3>
        <h3 class="card-text">Start Date :{{$batchs->start_date}}</h3>

    </div>
</hr>
</div>
</div>
    </div>
</div>


@endsection