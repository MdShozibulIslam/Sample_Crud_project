@extends('layouts.app')
@push('title')
    Add Employee 
@endpush

@section('content')
    

<div class="container">
        <div class="row">
            <div class="col text-center" >
                <h1>Input Emloyee Information</h1>
            </div>
        </div>  


        <div class="row">
            <div class="col-6 ">
            <a href="{{url('/')}}" class="btn btn-primary">Show Employee Details</a>
            </div>
        </div>

        <div class="row align-items-start">
   
        <div class="col">
            <form action="{{url('/store')}}" method="POST" >
                    @csrf
                        <x-input label="First Name" type="text" id="first_name_id" name="first_name"/>
                        @error('first_name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <x-input label="Last Name" type="text" id="last_name_id" name="last_name"/>
                        @error('last_name')
                             <span class="text-danger">{{$message}}</span>
                        @enderror
                        <x-input label="Address" type="text" id="address_id" name="address"/>
                        <x-input label="Email " type="email" id="email_id" name="email"/>
                        @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <x-input label="Mobile Number" type="text" id="mob_num_id" name="mobile_number"/>
                        <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    
    </div>
   
  </div>
</div>
@endsection