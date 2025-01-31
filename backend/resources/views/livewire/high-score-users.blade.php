<div class= "w-full text-white text-2xl">
    <div  class="w-72 mx-auto">
        <div class="flex justify-between font-bold mb-4">
            <div class="min-w-32">Name</div>
            <div class="min-w-32">Score</div>
        </div>
            @foreach ($scores as $score)
                <div class="flex justify-between text-xl">
                    <div class="min-w-32">{{ ucfirst($score['user_name']) }}</div>
                    <div class="min-w-32">{{ $score['high_score'] }}</div>
                </div>
            @endforeach

        </div>

    </div>
