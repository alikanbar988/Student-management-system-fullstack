@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
<div class="card-header"><h5>Payments</h5></div>
 <div class="card-body">
    <div class="card-body">
        <h3 class="card-title">Enrollment NO:{{$payments->enrollment->enroll_no}}</h3>
        <h3 class="card-text">Paid Date:{{$payments->paid_date }}</h3>
        <h3 class="card-text">Amount:{{ $payments->amount }}</h3>
    </div>
</hr>
</div>
</div>
    </div>
</div>


@endsection