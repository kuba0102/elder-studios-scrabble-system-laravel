<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PlResult extends Model
{
  protected $primaryKey = 'result_id';


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

  public static function getLastMatchId()
  {
    $lastId = DB::table('pl_results')
    ->select('pl_results.result_match_id')
    //->groupBy('pl_members.member_id','pl_members.member_name', 'pl_members.member_last_name')
    ->orderBy('pl_results.result_match_id','desc')
    ->limit(1)
    ->get();
    return $lastId;
  //  SELECT pl_results.result_match_id from pl_results ORDER BY  DESC LIMIT 1;
  }
}
