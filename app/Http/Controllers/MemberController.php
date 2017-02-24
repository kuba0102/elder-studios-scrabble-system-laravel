<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PlMember;
use App\PlResult;
use App\Http\Requests;

class MemberController extends Controller
{
  function index()
  {
    $members = PlMember::all();
    return view('member/all-members',['members' => $members]);
  }
  function getTopTen()
  {
    $members = PlResult::getTopTen();
    return view('result/leader-list',['members' => $members]);
  }
  function details($memberId)
  {
    $member = PlMember::find($memberId);
    return view('member/details',['member' => $member]);
  }
  function addForm()
  {
    return view('member/add-member-form');
  }
  function addMember(Request $request)
  {
    $member = new PlMember();
    $member->member_name = $request->name;
    $member->member_last_name=$request->lastName;
    $member->member_mobile_number=$request->mbNum;
    $dateJoined= $request->year.$request->month.$request->day;
    $member->member_date_joined=$dateJoined;
    $member->save();
    return redirect('all');
  }
  function removeMember(Request $request)
  {
    PlMember::destroy($request->member);
    return redirect('all');
  }
}
?>
