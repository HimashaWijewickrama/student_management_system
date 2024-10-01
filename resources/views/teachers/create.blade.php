@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Add Teacher</div>
  <div class="card-body">
      
      <form action="{{ url('teachers') }}" method="post">
        {!! csrf_field() !!}
        <label>Full Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Mobile Number</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <label>Subject</label></br>
        <input type="text" name="subject" id="subject" class="form-control"></br>
        <label>Email Address</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop