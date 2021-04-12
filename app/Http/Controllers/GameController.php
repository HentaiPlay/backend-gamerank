<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class GameController extends Controller
{
    public function games()
    {
        $query = Game::with('category')->get();
        $result = [];

        /**
         * Change result array for category
         * 
         * @return new array
         */ 
        foreach($query as $value)
        {
            for($i = 0; $i < count($value->category); $i++)
            {
                $value->category[$i] = $value->category[$i]->name;
            }
            array_push($result, $value);
        }

        return $result;
    }

    public function game($slug)
    {
        return Game::with('category', 'studios')->firstWhere('slug', $slug);
    }

    public function images($slug)
    {
        return Game::with('image')->firstWhere('slug', $slug)->only('image');
    }
}

