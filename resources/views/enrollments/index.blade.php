@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card-header">
            <h2> Enrollment Application</h2>
                 </div>
                     <div class="card-body">
                            <a href="{{url('/enrollments/create')}}" class="btn btn-success btn-sm"  title="Add New Enrollment">
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
                        <th> Enroll_no </th>
                        <th> Batch </th>
                        <th> Student </th>
                        <th> Join_date </th>
                        <th> Fee </th>
                        <th> Actions </th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($enrollments as $item)
                            <tr>
                                <td scope="col">{{ $loop->iteration }}</td>
                                <td scope="col">{{ $item->enroll_no}}</td>
                                <td scope="col">{{ $item->batch->name ?? 'Name not available'}}</td>
                                <td scope="col">{{ $item->student->name ?? 'Name not available'}}</td>
                                <td scope="col">{{ $item->join_date }}</td>
                                <td scope="col">{{ $item->fee }}</td>
                                
                        <td>
                
                                <a href="{{url ('/enrollments/'. $item->id) }}" title="View Enrollment"> <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                <a href="{{url ('/enrollments/'. $item->id .'/edit') }}" title="Edit Enrollment"> <button class="btn btn-primary btn-sm"> <i class="fa fa-pencil-square-0" aria-hidden="true"></i>Edit</button></a>
                            
                               <form action="{{ url('/enrollments'. '/' .$item->id) }}" method="POST" style ="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Enrollment" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-0" aria-hidden="true"></i>Delete</button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>     
    



@endsection


