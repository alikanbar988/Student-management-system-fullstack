@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card-header">
            <h2> Payment Application</h2>
                 </div>
                     <div class="card-body">
                            <a href="{{url('/payments/create')}}" class="btn btn-success btn-sm"  title="Add New Payment">
                                <i class="fa fa plus" aira hidden="true"> </i> Add New
                            </a>
                        </div>
                                <br/>
                                    <br/>
                        <table class="table-responsive">
                        <table class="table">
                        <thead>
                        <tr>
                        <th># </th>
                        <th> Enrollment No </th>
                        <th> paid date </th>
                        <th> Amount </th>
                        <th> Action </th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($payments as $item)
                            <tr>
                                <td scope="col">{{ $loop->iteration }}</td>
                                <td scope="col">{{ $item->enrollment->enroll_no}}</td>
                                <td scope="col">{{ $item->paid_date }}</td>
                                <td scope="col">{{ $item->amount }}</td>
                                
                        <td>
                
                                <a href="{{url ('/payments/'. $item->id) }}" title="View Payment"> <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                <a href="{{url ('/payments/'. $item->id .'/edit') }}" title="Edit Payment"> <button class="btn btn-primary btn-sm"> <i class="fa fa-pencil-square-0" aria-hidden="true"></i>Edit</button></a>
                            
                               <form action="{{ url('/payments'. '/' .$item->id) }}" method="POST" style ="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Payment" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-0" aria-hidden="true"></i>Delete</button>
                                </form>
                                <a href="{{url ('/report/report1/'. $item->id) }}" title="Print Payment"> <button class="btn btn-primary btn-sm"> <i class="fa fa-pencil-square-0" aria-hidden="true"></i>Print</button></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>     
    



@endsection


