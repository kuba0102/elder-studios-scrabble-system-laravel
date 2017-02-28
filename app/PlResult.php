<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PlResult extends Model
{
  // seting primary key for the table
  protected $primaryKey = 'result_id';

  /*
  get top 10 members
  return: return top 10 members
  */
  public static function getTopTen()
  {
    $members = DB::table('pl_members')
    ->join('pl_results', 'pl_members.member_id', '=', 'pl_results.result_member_id')
    ->select('pl_members.member_id', 'pl_members.member_name', 'pl_members.member_last_name',DB::raw('AVG(pl_results.result_score) as score'))
    ->groupBy('pl_members.member_id','pl_members.member_name', 'pl_members.member_last_name')
    ->orderBy('score','desc')
    ->limit(10)
    ->get();
    return $members;
  }

  /*
  return: returns last match ID
  */
  public static function getLastMatchId()
  {
    $lastId = DB::table('pl_results')
    ->select('pl_results.result_match_id')
    ->orderBy('pl_results.result_match_id','desc')
    ->limit(1)
    ->get();
    return $lastId;
  }

  /*
  param: member unique ID number
  return: return number of wins
  */
  public static function getMemberWins($memberId)
  {
    $wins = DB::table('pl_results')
    ->select(DB::raw('count(pl_results.result_member_id) AS wins'))
    ->where('pl_results.result_member_id', '=', $memberId)
    ->where('pl_results.result_match_status', '=', '1')
    ->groupBy('pl_results.result_member_id')
    ->get();
    return $wins;
  }

  /*
  param: member unique ID number
  return: return number of losses
  */
  public static function getMemberLosses($memberId)
  {
    $losses = DB::table('pl_results')
    ->select(DB::raw('count(pl_results.result_member_id) AS losses'))
    ->where('pl_results.result_member_id', '=', $memberId)
    ->where('pl_results.result_match_status', '=', '2')
    ->groupBy('pl_results.result_member_id')
    ->get();
    return $losses;
  }

  /*
  param: member unique ID number
  return: retrun highest score
  */
  public static function getMemberHighest($memberId)
  {
    $highest = DB::table('pl_results')
    ->select('pl_results.result_score')
    ->where('pl_results.result_member_id', '=', $memberId)
    ->orderBy('pl_results.result_score','desc')
    ->limit(1)
    ->get();
    return $highest;
  }

  /*
  param: member unique ID number
  return: retrun average score
  */
  public static function getAvgHighest($memberId)
  {
    $avg = DB::table('pl_results')
    ->select(DB::raw('AVG(pl_results.result_score) AS avgScore'))
    ->where('pl_results.result_member_id', '=', $memberId)
    ->groupBy('pl_results.result_member_id')
    ->get();
    return $avg;
  }

  /*
  param: member unique ID number
  return: retrun name and last name of a member
  */
  public static function getMemberHighestAgainst($memberId)
  {
    $topAgainst = DB::table('pl_results')
    ->select('pl_results.result_match_id')
    ->where('pl_results.result_member_id', '=', $memberId)
    ->orderBy('pl_results.result_score','desc')
    ->limit(1)
    ->get();

    $member = DB::table('pl_members')
    ->join('pl_results', 'pl_members.member_id', '=', 'pl_results.result_member_id')
    ->select('pl_members.member_id','pl_members.member_name', 'pl_members.member_last_name')
    ->where('pl_results.result_member_id', '!=', $memberId)
    ->where('pl_results.result_match_id', '=',$topAgainst[0]->result_match_id)
    ->limit(1)
    ->get();
    return $member;
  }
}
