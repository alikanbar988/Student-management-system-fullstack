@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card-header">
            <h2> Batch Application</h2>
                 </div>
                     <div class="card-body">
                            <a href="{{url('/batchs/create')}}" class="btn btn-success btn-sm"  title="Add New Batch">
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
                        <th> Name </th>
                        <th> Course </th>
                        <th> Start date </th>
                        <th> Action </th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($batchs as $item)
                            <tr>
                                <td scope="col">{{ $loop->iteration }}</td>
                                <td scope="col">{{ $item->name}}</td>
                                <td scope="col">{{ $item->course->name}}</td>
                                <td scope="col">{{ $item->start_date }}</td>
                                
                        <td>
                
                                <a href="{{url ('/batchs/'. $item->id) }}" title="View Batch"> <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                <a href="{{url ('/batchs/'. $item->id .'/edit') }}" title="Edit Batch"> <button class="btn btn-primary btn-sm"> <i class="fa fa-pencil-square-0" aria-hidden="true"></i>Edit</button></a>
                            
                               <form action="{{ url('/batchs'. '/' .$item->id) }}" method="POST" style ="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Batch" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-0" aria-hidden="true"></i>Delete</button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>     
    



@endsection


