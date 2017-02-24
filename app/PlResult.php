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
    ->select('pl_members.member_id', 'pl_members.member_name',DB::raw('AVG(pl_results.result_score) as score'))
    ->groupBy('pl_members.member_id','pl_members.member_name')
     ->groupBy('pl_members.member_id')
     ->orderBy('score','desc')
     ->limit(10)
    ->get();
    return $members;
  }
}
