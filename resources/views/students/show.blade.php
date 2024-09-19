@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
<div class="card-header"><h5>Students</h5></div>
 <div class="card-body">
    <div class="card-body">
        <h3 class="card-title">Name:{{$students->name}}</h3>
        <h3 class="card-text">Address:{{$students->address}}</h3>
        <h3 class="card-text">Mobile:{{$students->mobile}}</h3>

    </div>
</hr>
</div>
</div>
    </div>
</div>


@endsection