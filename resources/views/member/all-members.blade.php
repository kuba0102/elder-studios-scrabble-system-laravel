@extends('layouts.master')

@section('title', 'All Members')

@section('content')
<h1>View All Members</h1>
<div class="panel panel-default">
  <div class="panel-body">

    <!--All Members Table-->
    <table class ="table">
      <tr>
        <th>Member Id</th>
        <th>Name</th>
      </tr>
    @foreach ($members as $member)
    <tr>
      <td><a href="{{url('details/'.$member->member_id)}}">{{$member->member_id}}</a></td>
      <td><a href="{{url('details/'.$member->member_id)}}">{{$member->member_name}} {{$member->member_last_name}}</a></td>
    </tr>
    @endforeach
  </div>
</div>
@endsection
