@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card-header">
            <h2> Student Application</h2>
                 </div>
                     <div class="card-body">
                            <a href="{{url('/students/create')}}" class="btn btn-success btn-sm"  title="Add New Student">
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
                        <th> Address </th>
                        <th> Mobile </th>
                        <th> Action </th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $item)
                            <tr>
                                <td scope="col">{{ $loop->iteration }}</td>
                                <td scope="col">{{ $item->name}}</td>
                                <td scope="col">{{ $item->address}}</td>
                                <td scope="col">{{ $item->mobile }}</td>
                                
                        <td>
                
                                <a href="{{url ('/students/'. $item->id) }}" title="View Student"> <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                <a href="{{url ('/students/'. $item->id .'/edit') }}" title="Edit Student"> <button class="btn btn-primary btn-sm"> <i class="fa fa-pencil-square-0" aria-hidden="true"></i>Edit</button></a>
                            
                               <form action="{{ url('/students'. '/' .$item->id) }}" method="POST" style ="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-0" aria-hidden="true"></i>Delete</button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>     
    



@endsection


