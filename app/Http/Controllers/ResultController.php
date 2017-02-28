<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PlResult;
use App\Http\Requests;

class ResultController extends Controller
{

  /*
  Display add new results form
  */
  function addResultForm()
  {
    return view('result/add-result-form');
  }

  /*
  Process infromation from add result form
  Display list of all members
  */
  function addResult(Request $request)
  {
    $this->validate($request,
    [
      'winner' => 'required|numeric',
      'wScore' => 'required|numeric|max:9999',
      'looser' => 'required|numeric',
      'lScore' => 'required|numeric|max:9999',
    ]);

    $winnerResult = new PlResult();
    $lastMatchId = $winnerResult->getLastMatchId();
    $looserResult = new PlResult();

    $lastMatchId = $lastMatchId[0]->result_match_id;
    $matchId = $lastMatchId+1;

    $winnerResult->result_member_id = $request->winner;
    $winnerResult->result_score = $request->wScore;
    $winnerResult->result_match_status = 1;
    $winnerResult->result_match_id = $matchId;
    $winnerResult->save();

    $looserResult->result_member_id = $request->looser;
    $looserResult->result_score = $request->lScore;
    $looserResult->result_match_status = 2;
    $looserResult->result_match_id = $matchId;
    $looserResult->save();

    return redirect('all');
  }

}
?>
