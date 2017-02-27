@extends('layouts.master')

@section('title', 'All Members')

@section('content')
<h1>View Top Members</h1>
<div class="panel panel-default">
  <div class="panel-body">
  <?php $count = 0; ?>
    @foreach ($members as $member)
    <?php $count = $count+1; ?>
    <p>
      <a href="{{url('details/'.$member->member_id)}}">{{$count}} {{$member->member_name}} {{$member->member_last_name}} {{round($member->score)}}</a>
    </p>
    @endforeach
  </div>
</div>
@endsection
