@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">View Enrollment Details</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Enroll No : {{ $enrollment->enroll_no }}</h5>
        <p class="card-text">Batch : {{ $enrollment->batch_id }}</p>
        <p class="card-text">Student : {{ $enrollment->student_id }}</p>
        <p class="card-text">Join Date : {{ $enrollment->join_date }}</p>
        <p class="card-text">Fee : {{ $enrollment->fee }}</p>

  </div>
       
    </hr>
  
  </div>
</div>
@endsection
