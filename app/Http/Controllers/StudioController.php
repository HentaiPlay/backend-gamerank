<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Studio;

class StudioController extends Controller
{
    public function studio($slug){
        return Studio::where('slug', $slug)->first();
    }

    public function studios(){
        return Studio::select('id','name', 'logo', 'slug')->get();
    }

    public function games($id)
    {
        return Studio::find($id)->games()->select('name', 'slug', 'preview_image')->get();
    }
}
