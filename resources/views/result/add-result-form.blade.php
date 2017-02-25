@extends('layouts.master')

@section('title', 'Add Results')

@section('content')
<h1>Add Match Results</h1>
<div class="panel panel-default">
  <div class="panel-body">
    <form action="{{url('addResult')}}" method="POST">
      {{ csrf_field() }}

      <div class="input-group">
        <span class="input-group-addon" id="winner"></span>
        <input type="text" name="winner" class="form-control" placeholder="Winner ID" aria-describedby="basic-addon1">
      </div>
      <div class="input-group">
        <span class="input-group-addon" id="wScore"></span>
        <input type="text" name="wScore" class="form-control" placeholder="Winner Score" aria-describedby="basic-addon1">
      </div>
      <div class="input-group">
        <span class="input-group-addon" id="looser"></span>
        <input type="text" name="looser" class="form-control" placeholder="Looser ID" aria-describedby="basic-addon1">
      </div>
      <div class="input-group">
        <span class="input-group-addon" id="lScore"></span>
        <input type="text" name="lScore" class="form-control" placeholder="Looser Score" aria-describedby="basic-addon1">
      </div>
      <input type="submit" name="submitBtn" value="Add New Match Results">
    </form>
  </div>
</div>
@endsection
