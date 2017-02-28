<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PlMember;
use App\PlResult;
use App\Http\Requests;

class MemberController extends Controller
{
  /*
  Display all member list
  */
  function index()
  {
    $members = PlMember::all();
    return view('member/all-members',['members' => $members]);
  }

  /*
  Display top ten members list
  */
  function getTopTen()
  {
    $members = PlResult::getTopTen();
    return view('result/leader-list',['members' => $members]);
  }

  /*
  Returns all infromation
  param: member_id member id
  Display member information
  */
  function details($memberId)
  {
    $league = array();
    $member = PlMember::find($memberId);
    // Member league details
    $wins = PlResult::getMemberWins($memberId);
    $losses = PlResult::getMemberLosses($memberId);
    $higScore = PlResult::getMemberHighest($memberId);
    $avg = PlResult::getAvgHighest($memberId);
    $topAgainst="Non Played";

    if($wins->isEmpty())
    {
      array_push($league,['wins' => "0"]);
    }
    else
    {
      array_push($league,['wins' => $wins[0]->wins]);
    }

    if($losses->isEmpty())
    {
      array_push($league,['losses' => "0"]);
    }
    else
    {
      array_push($league,['losses' => $losses[0]->losses]);
    }
    if(!$higScore->isEmpty())
    {
      $topAgainst = PlResult::getMemberHighestAgainst($memberId);
      array_push($league,['higScore' => $higScore[0]->result_score,'avgScore' => $avg[0]->avgScore]);
    }

    return view('member/details',['member' => $member, 'league' => $league, 'topAgainst' => $topAgainst]);
  }

  /*
  Display add member form
  */
  function addForm()
  {
    return view('member/add-member-form');
  }

  /*
  Process infromation from add member form
  */
  function addMember(Request $request)
  {
    $this->validate($request,
    [
    'name' => 'required|max:100',
    'lastName' => 'required|max:100',
    'mbNum' => 'required|numeric'
    ]);
    $lastId = PlMember::getLastMemberId();
    $lastId = $lastId[0]->member_id;
    $matchId = $lastId+1;
    $member = new PlMember();
    $member->member_id = $matchId;
    $member->member_name = $request->name;
    $member->member_last_name=$request->lastName;
    $member->member_mobile_number=$request->mbNum;
    $dateJoined = date('Ymd');
    $member->member_date_joined=$dateJoined;
    $member->save();
    return redirect('all');
  }

  /*
  param: member_id member id
  Display update members details
  */
  function updateForm($memberId)
  {
    $member = PlMember::find($memberId);
    return view('member/update-member-form',['member' => $member]);
  }

  /*
  param: member_id member id
  Process infromation from update member form
  */
  function updateMember(Request $request, $memberId)
  {
    $this->validate($request,
    [
    'name' => 'required|max:100',
    'lastName' => 'required|max:100',
    'mbNum' => 'required|numeric'
    ]);
    $member = PlMember::find($memberId);
    $member->member_name = $request->name;
    $member->member_last_name=$request->lastName;
    $member->member_mobile_number=$request->mbNum;
    $member->save();
    return redirect('all');
  }

  /*
  Remove user and display list of all members
  */
  function removeMember(Request $request)
  {
    PlMember::destroy($request->member);
    return redirect('all');
  }
}
?>
