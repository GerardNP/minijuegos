<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Score;
use App\Account;
use App\Game;

class ScoreController extends Controller
{
  // Muestra todas las puntuaciones del jugador si este existe
  public function showAuthor($slug) {
    $account = Account::where("slug", $slug)->first();
    $name = $account->user->name;
    if ( isset($account) ) {
      /* Si un juego ha desactivado sus puntuaciones, la puntuación del jugador si se podrá ver
      pero las mejores, accesibles por url o por la página del juego no. */
      $scores = Score::where("account_id", $account->id);

      $results = count( $scores->get() );

      $scores = $scores->paginate(12);

      return view( "scores.showAuthor", compact("scores", "name", "results") );

    } else {
      return abort("404");
    }
  }


  // Muestra las 5 mejores puntuaciones de un determinado juego
  public function showGame($slug) {
    $game = Game::where("slug", $slug)
    ->where("published", true)
    ->where("has_score", true)
    ->first();

    if ( isset($game) ) {
      $scores = Score::where("game_id", $game->id)
      ->orderBy("score", "desc")
      ->take(5)
      ->get();

      return view( "scores.showGame", compact("scores", "game") );

    } else {
      return abort("404");
    }
  }


  public function save(Request $request) {
    $score = Score::updateOrCreate(
      // Si encuentra un registro que coincida con estos valores
      ["account_id" => $request->account, "game_id" => $request->game],
      // lo actualiza con estos valores, si no, lo crea
      ["score"=>$request->score]
    );
  }

}
