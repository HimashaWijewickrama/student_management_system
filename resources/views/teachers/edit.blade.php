@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Update Teacher Details</div>
  <div class="card-body">
      
      <form action="{{ url('teachers/' .$teacher->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$teacher->id}}" id="id" />
        <label>Full Name</label></br>
        <input type="text" name="name" id="name" value="{{$teacher->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$teacher->address}}" class="form-control"></br>
        <label>Mobile Number</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$teacher->mobile}}" class="form-control"></br>
        <label>Subject</label></br>
        <input type="text" name="subject" id="subject" value="{{$teacher->subject}}" class="form-control"></br>
        <label>Email Address</label></br>
        <input type="text" name="email" id="email" value="{{$teacher->email}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop