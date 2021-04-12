<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Game;
use App\Models\Comment;

class CommentController extends Controller
{
    public function comments($slug)
    {
        $id = Game::where('slug', $slug)->first()->id;
        return Comment::with('sender')->where('game_id', $id)->get();
    }

    public function add(Request $request, $slug)
    {
        $id = Game::where('slug', $slug)->first()->id;
        $validator = Validator::make($request->all(), ['comment' => 'required']);

        if($validator->fails()){
            return response()->json(['message' => 'Comment empty']);
        }

        $comment = new Comment;
        $comment->game_id = $id;
        $comment->comment = $request->comment;
        $comment->sender_id = $request->sender_id;
        $comment->save();
        
        return response()->json(['message' => 'success add new comment']);
    }
}
