@extends('layouts.master')
@section('title', 'Member details')
@section('content')
<h1>Member Details</h1>
<ul>
<li>Name: {{$member->member_name}}</li>
<li>Last Name: {{$member->member_last_name}}</li>
<li>Joined Date: {{$member->member_date_joined}}</li>
</ul>
@endsection
