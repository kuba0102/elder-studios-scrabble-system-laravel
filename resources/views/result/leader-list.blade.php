@extends('layouts.master')

@section('title', 'All Members')

@section('content')
    <h1>View Top Members</h1>
     @foreach ($members as $member)
        <p>
            <a href="{{url('details/'.$member->member_id)}}">{{$member->member_name}} {{$member->member_last_name}} {{round($member->score)}}</a>
        </p>
    @endforeach
@endsection
