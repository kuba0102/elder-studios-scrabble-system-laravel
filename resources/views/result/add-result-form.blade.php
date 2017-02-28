@extends('layouts.master')

@section('title', 'Add Results')

@section('content')
<!--Error List-->
@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<!--New Results Form-->
<h1>Add Match Results</h1>
<div class="panel panel-default">
  <div class="panel-body">
    <form action="{{url('addResult')}}" method="POST">
      {{ csrf_field() }}

      <div class="input-group">
        <span class="input-group-addon" id="winner"></span>
        <input type="number" name="winner" class="form-control" placeholder="Winner ID" aria-describedby="basic-addon1">
      </div>
      <div class="input-group">
        <span class="input-group-addon" id="wScore"></span>
        <input type="number" name="wScore" class="form-control" placeholder="Winner Score" aria-describedby="basic-addon1">
      </div>
      <div class="input-group">
        <span class="input-group-addon" id="looser"></span>
        <input type="number" name="looser" class="form-control" placeholder="Looser ID" aria-describedby="basic-addon1">
      </div>
      <div class="input-group">
        <span class="input-group-addon" id="lScore"></span>
        <input type="number" name="lScore" class="form-control" placeholder="Looser Score" aria-describedby="basic-addon1">
      </div>
      <input type="submit" name="submitBtn" value="Add New Match Results">
    </form>
  </div>
</div>
@endsection
