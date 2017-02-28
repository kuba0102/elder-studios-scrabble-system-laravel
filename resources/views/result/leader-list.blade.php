@extends('layouts.master')

@section('title', 'All Members')

@section('content')
<h1>View Top Members</h1>
<div class="panel panel-default">
  <div class="panel-body">

        <!--Top 10 Members Table-->
    <table class ="table">
      <tr>
        <th>Rank</th>
        <th>Name</th>
        <th>Average Score</th>
      </tr>
      <?php $count = 0; ?>
      @foreach ($members as $member)
      <?php $count = $count+1; ?>
      <tr>
        <td><a href="{{url('details/'.$member->member_id)}}">{{$count}}</a></td>
        <td><a href="{{url('details/'.$member->member_id)}}">{{$member->member_name}} {{$member->member_last_name}}</a></td>
        <td><a href="{{url('details/'.$member->member_id)}}">{{round($member->score)}}</a></td>
      </tr>

      @endforeach
    </div>
  </div>
  @endsection
