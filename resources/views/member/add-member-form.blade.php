@extends('layouts.master')

@section('title', 'Add New Member')

@section('content')
<h1>Add New Member</h1>
<div class="panel panel-default">
  <div class="panel-body">
    <form action="{{url('addMember')}}" method="POST">
      {{ csrf_field() }}
      <div class="input-group">
        <span class="input-group-addon" id="name"></span>
        <input type="text" name="name" class="form-control" placeholder="Name" aria-describedby="basic-addon1">
      </div>
      <div class="input-group">
        <span class="input-group-addon" id="lastName"></span>
        <input type="text" name="lastName" class="form-control" placeholder="Last Name" aria-describedby="basic-addon1">
      </div>
      <div class="input-group">
        <span class="input-group-addon" id="mbNum"></span>
        <input type="text" name="mbNum" class="form-control" placeholder="Mobile Number" aria-describedby="basic-addon1">
      </div>
      <div class="input-group">
        <span class="input-group-addon" id="day"></span>
        <input type="text" name="day" class="form-control" placeholder="Day" aria-describedby="basic-addon1">

        <span class="input-group-addon" id="month"></span>
        <input type="text" name="month" class="form-control" placeholder="Month" aria-describedby="basic-addon1">

        <span class="input-group-addon" id="year"></span>
        <input type="text" name="year" class="form-control" placeholder="Year" aria-describedby="basic-addon1">
      </div>
      <input type="submit" name="submitBtn" value="Add Member">
    </form>
  </div>
</div>
@endsection
