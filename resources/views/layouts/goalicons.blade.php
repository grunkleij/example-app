<div class="icontainer">
    <div class="text-center text-5xl font-semibold bg-gradient-to-br from-emerald-500 to-teal-600 bg-clip-text text-transparent">
        Goals
    </div>
    <div class="card-containerr">
        @foreach ($goals as $goal)
            <a href="{{ route('goal.details', $goal['id']) }}" class="cardd" 
               style="background-image: url('{{ asset($goal['backgroundImage'] ?? '') }}');">
                <img class="icon-imagee" src="{{ asset($goal['iconImage']) }}" alt="Icon {{ $goal['id'] + 1 }}">
                <div class="overlayy">
                    <h2>{{ $goal['text'] }}</h2>
                </div>
                <div class="extra-infoo">
                    <p>{{ $goal['text'] }}</p>
                </div>
            </a>
        @endforeach
    </div>
</div>
