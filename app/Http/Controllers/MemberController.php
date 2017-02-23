<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PlMember;
use App\Http\Requests;

class MemberController extends Controller
{
    function index()
    {
      $members = PlMember::all();
      return view('member/all-members',['members' => $members]);
    }
    function details($memberId)
    {
      $member = PlMember::find($memberId);
      return view('member/details',['member' => $member]);
    }
    function addForm()
    {
        return "controller - show add film form";
    }
    function addFilm(Request $request)
    {
        return "controller - add a new film";
    }
}
?>
