<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\HighScore;

class HighScoreUsers extends Component
{
    public function render()
    {

        $scores = HighScore::query()
            ->selectRaw('user_name, max(score) as high_score')
            ->groupBy('user_name')
            ->orderBy('high_score', 'desc')
            ->get();

        return view('livewire.high-score-users', ['scores' => $scores]);
    }
}
