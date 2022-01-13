@extends('layouts.app')
@push('title')
    Employee Information 
@endpush

@section('content')
    <div class="container">
        <div class="row">
            <div class="col text-center" >
                <h1> Emloyees Information</h1>
            </div>
        </div>  
        <div class="row  ">
                @if(Session::has('message'))
                    <p class="alert alert-success">{{Session::get('message')}}</p>
                @endif

                @if(Session::has('deleteMessage'))
                    <p class="alert alert-danger">{{Session::get('deleteMessage')}}</p>
                @endif
        </div>
        
        <div class="row ">
            <div class="col-md-4">
            <a href="{{url('/add')}}" class="btn btn-primary">Add Employee</a>
            </div>
        </div>       
    <div class="row align-items-start">


        
        <div class="row">

                <table class="table" style="margin-top: 20px;">
                    <thead class="table-dark">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Address</th>
                                <th scope="col">Email</th>
                                <th scope="col">Mobile No</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key=>$employee)
                            <tr class="table-warning">
                                    <td>{{$key+1}}</td>
                                    <td>{{$employee->first_name}}</td>
                                    <td>{{$employee->last_name}}</td>
                                    <td>{{$employee->address}}</td>
                                    <td>{{$employee->email}}</td>
                                    <td>{{$employee->mobile_number}}</td>
                                    <td><a href="{{url('/edit/'.$employee->id)}}" class="btn btn-success">Edit</a>
                                    <a href="{{url('/delete/'.$employee->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a></td>
                                    
                                </tr>
                            @endforeach
                            
                        </tbody>
                 </table>

                 {{$data->links()}}
        </div>
       
        </div>
    </div>

@endsection
   