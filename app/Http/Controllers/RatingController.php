<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Rating;

class RatingController extends Controller
{
    public function common($slug)
    {
        $game_id = Game::where('slug', $slug)->first()->id;
        $result = Rating::where('game_id', $game_id)->avg('rank');

        return ($result == '') ? 0 : $result;
    }

    public function person($slug, $id)
    {
        $user_id = $id;
        $game_id = Game::where('slug', $slug)->first()->id;
        $result = Rating::where('game_id', $game_id)->firstWhere('user_id', $user_id);

        return ($result == '') ? 0 : $result->rank;
    }

    public function add(Request $request, $slug)
    {
        $game_id = Game::where('slug', $slug)->first()->id;

        $rating = new Rating;
        $rating->game_id = $game_id; 
        $rating->user_id = $request->user_id;
        $rating->rank = $request->rank;
        $rating->save();
        
        return response()->json($rating->rank);
    }

    public function update(Request $request, $slug)
    {
        $game_id = Game::where('slug', $slug)->first()->id;
        $user_id = $request->user_id;

        $rating = Rating::where('game_id', $game_id)->firstWhere('user_id', $user_id);
        $rating->rank = $request->rank;
        $rating->save();
        
        return response()->json($rating);
    }

    public function delete(Request $request, $slug)
    {
        $game_id = Game::where('slug', $slug)->first()->id;
        $user_id = $request->user_id;
        $rating = Rating::where('game_id', $game_id)->firstWhere('user_id', $user_id);
        $rating->delete();

        return response()->json(['message' => 'success delete rank']);
    }
}
