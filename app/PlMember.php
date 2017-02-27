<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PlMember extends Model
{
    protected $primaryKey = 'member_id';

    public static function getLastMemberId()
    {
      $lastId = DB::table('pl_members')
      ->select('pl_members.member_id')
      ->orderBy('pl_members.member_id','desc')
      ->limit(1)
      ->get();
      return $lastId;
    }
}
