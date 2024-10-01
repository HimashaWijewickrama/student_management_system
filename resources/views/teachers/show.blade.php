@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">View Teacher Details</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Full Name : {{ $teacher->name }}</h5>
        <p class="card-text">Address : {{ $teacher->address }}</p>
        <p class="card-text">Mobile Number : {{ $teacher->mobile }}</p>
        <p class="card-text">Subject : {{ $teacher->subject }}</p>
        <p class="card-text">Email Address : {{ $teacher->email }}</p>

  </div>
       
    </hr>
  
  </div>
</div>
@endsection
