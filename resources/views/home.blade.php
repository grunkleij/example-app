<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/hero.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/paragraph@latest"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">

    <style>
         .icontainer {
            min-height: 100vh;
            padding: 20px;
           
            z-index: -1;
        }

        .card-containerr {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            max-width: 100%;
            padding: 20px;
            border-radius: 10px;
           
            justify-content: center;
        }

        .cardd {
            flex: 1 1 calc(25% - 15px);
            max-width: 200px;
            height: 230px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-size: cover;
            background-position: center;
            border-radius: 10px;
            position: relative;
            overflow: hidden;
            background-color: white;
            transition: transform 0.3s ease;
        }

        .cardd:hover {
            transform: scale(1.05);
        }

        .icon-imagee {
            width: 70%;
            height: 70%;
            object-fit: contain;
            border-radius: 10px;
            transition: opacity 0.3s ease;
        }

        .cardd:hover .icon-imagee {
            opacity: 0;
        }

        .overlayy {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease;
            border-radius: 10px;
            text-align: center;
            padding: 10px;
        }

        .cardd:hover .overlayy {
            opacity: 1;
        }

        .extra-infoo {
            position: absolute;
            bottom: -250px;
            left: 50%;
            transform: translateX(-50%);
            background-color: rgb(213, 247, 220);
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            width: 90%;
            height: 80%;
            transition: bottom 0.3s ease;
        }

        .cardd:hover .extra-infoo {
            bottom: 10px;
        }

        @media (max-width: 768px) {
            .cardd {
                height: 200px;
                flex: 1 1 calc(50% - 15px);
            }
        }

        @media (max-width: 480px) {
            .cardd {
                font-size: 9.5;
                flex: 1 1 inherit;
            }
        }
    </style>
</head>

<body class="bg-[#fdfaf4]">
    @include('layouts.navbar')
    @include('layouts.hero')

    {{-- <div class="grid grid-cols-2 gap-0 h-[50vh] py-4 px-10">
        <!-- Left Side: Two SDG Tiles -->
        <div class="flex flex-col gap-0">
            <div class="bg-blue-500  text-white p-6 flex-1 flex flex-col justify-center items-center transition-transform duration-300 transform hover:scale-105 overflow-hidden">
                <div class="mb-2">
                    <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L1 21h22L12 2zm0 3.3L19.6 19H4.4L12 5.3zM11 10v5h2v-5h-2zm0 6v2h2v-2h-2z"/>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold">SDG 1</h2>
                <p class="text-lg">Projects: 10</p>
                <p class="text-lg">Publications: 5</p>
            </div>
            <div class="bg-green-500 text-white p-6 flex-1 flex flex-col justify-center items-center transition-transform duration-300 transform hover:scale-105 overflow-hidden">
                <div class="mb-2">
                    <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L1 21h22L12 2zm0 3.3L19.6 19H4.4L12 5.3zM11 10v5h2v-5h-2zm0 6v2h2v-2h-2z"/>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold">SDG 2</h2>
                <p class="text-lg">Projects: {{$projects2->count()}}</p>
                <p class="text-lg">Publications: {{ $publication2->count() }}</p>
            </div>
        </div>
        
        <!-- Right Side: One Large SDG Tile -->
        <div class="bg-red-500 text-white p-6 flex flex-col justify-center items-center h-full transition-transform duration-300 transform hover:scale-105 overflow-hidden">
            <div class="mb-2">
                <svg class="w-14 h-14" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2L1 21h22L12 2zm0 3.3L19.6 19H4.4L12 5.3zM11 10v5h2v-5h-2zm0 6v2h2v-2h-2z"/>
                </svg>
            </div>
            <h2 class="text-3xl font-bold">SDG 3</h2>
            <p class="text-lg">Projects: {{$projects3->count()}}</p>
            <p class="text-lg">Publications: {{ $publication3->count() }}</p>
        </div>
    </div>
     --}}
    
    
    
    
    
   
    
    

    


    @include('layouts.about')


    <div class="icontainer">
        <div class="text-center text-5xl font-semibold  " style="color: #004d4d;">Goals</div>
        <div class="card-containerr">
            @foreach ($goals as $goal)
                <a href="{{ route('goal.details', $goal['id']) }}" class="cardd" style="background-image: url('{{ asset($goal['backgroundImage'] ?? '') }}');">
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

    
</body>

</html>