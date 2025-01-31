<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HighScore;

class HighScoreController extends Controller
{
    
    public function store(Request $request)
    {
        $request->validate([
            'user_name' => 'required',
            'score' => 'required|numeric',
        ]);

        HighScore::create($request->all());

        return response()->json([
            'request' => $request->all(),
            'message' => 'High score added!']);
    }
}
