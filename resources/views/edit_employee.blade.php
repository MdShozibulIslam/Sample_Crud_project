@extends('layouts.app')
@push('title')
    Edit Employee 
@endpush

@section('content')
    

<div class="container">
        <div class="row">
            <div class="col text-center" >
                <h1>Input Emloyee Information</h1>
            </div>
        </div>  

        <div class="row">
            <div class="col-md-4">
            <a href="{{url('/')}}" class="btn btn-primary">Show Employee Details</a>
            </div>
        </div>

        <div class="row align-items-start">
   
        <div class="col">
            <form action="{{url('/update/'.$edit_employee->id)}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">First Name</label>
                        <input type=text class="form-control" id="first_name_id" name="first_name" value="{{$edit_employee->first_name}}" >
                        @error('first_name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Last Name</label>
                        <input type=text class="form-control" id="last_name_id" name="last_name" value="{{$edit_employee->last_name}}" >
                        @error('last_name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <input type=text class="form-control" id="address_id" name="address" value="{{$edit_employee->address}}" >
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type=email class="form-control" id="email_id" name="email" value="{{$edit_employee->email}}" >
                        @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mobile Number</label>
                        <input type=text class="form-control" id="mobile_number_id" name="mobile_number" value="{{$edit_employee->mobile_number}}" >
                    </div>

                        <button type="submit" class="btn btn-primary">Update</button>
            </form>
    
    </div>
   
  </div>
</div>
@endsection