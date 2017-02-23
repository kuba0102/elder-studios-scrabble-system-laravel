@extends('layouts.master')
@section('title', 'Member details')
@section('content')
<h1>Member Details</h1>
<ul>
  <li>Name: {{$member->member_name}}</li>
  <li>Last Name: {{$member->member_last_name}}</li>
  <li>Joined Date: {{$member->member_date_joined}}</li>
</ul>
<form action="{{url('removeMember')}}" method="POST">
  {{ csrf_field() }}
  <label>Remove Member</label>
  <input type='checkbox' value='{{$member->member_id}}' id="member" name='member'/>
  <input type="submit" name="submitBtn" value="Delete Member">
</form>

@endsection
