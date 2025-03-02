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

    <div class="flex justify-center">
        <div class="w-1/4 my-10 h-64 mx-5 relative bg-red-500 py-10 pl-3 pr-3"
             style="background-image: url('https://images.unsplash.com/photo-1534312527009-56c7016453e6?q=80&w=2127&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
                    background-size: cover; background-blend-mode: soft-light; opacity: 0.9;">
            <h1 class="text-4xl font-extrabold bg-clip-text text-transparent"
                style="background-image: url('https://images.unsplash.com/photo-1534312527009-56c7016453e6?q=80&w=2127&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); background-size: cover;">
                SDG 1
            </h1>
            <hr class="border-black my-1">
            <p class="text-2xl font-semibold " >Projects {{$projects1->count()}}</p>
            <p class="text-2xl font-semibold " >publications: {{$publication1->count()}}</p>
        </div>
    
        <div class="w-1/4 my-10 h-64 mx-5 relative bg-yellow-500 py-10 pl-3 pr-3"
             style="background-image: url('https://images.unsplash.com/photo-1534312527009-56c7016453e6?q=80&w=2127&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
                    background-size: cover; background-blend-mode: soft-light; opacity: 0.9;">
            <h1 class="text-4xl font-extrabold bg-clip-text text-transparent"
                style="background-image: url('https://images.unsplash.com/photo-1534312527009-56c7016453e6?q=80&w=2127&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); background-size: cover;">
                SDG 2
            </h1>
            <hr class="border-black my-1">
            <p class="text-2xl font-semibold " >Projects {{$projects2->count()}}</p>
            <p class="text-2xl font-semibold " >publications: {{$publication2->count()}}</p>
        </div>
    
        <div class="w-1/4 my-10 h-64 mx-5 relative bg-green-500 py-10 pl-3 pr-3"
             style="background-image: url('https://images.unsplash.com/photo-1534312527009-56c7016453e6?q=80&w=2127&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
                    background-size: cover; background-blend-mode: soft-light; opacity: 0.9;">
            <h1 class="text-4xl font-extrabold bg-clip-text text-transparent"
                style="background-image: url('https://images.unsplash.com/photo-1534312527009-56c7016453e6?q=80&w=2127&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); background-size: cover;">
                SDG 3
            </h1>
            <hr class="border-black my-1">
            <p class="text-2xl font-semibold " >Projects {{$projects3->count()}}</p>
            <p class="text-2xl font-semibold " >publications: {{$publication3->count()}}</p>
        </div>
    </div>
    
    
   
    
    

    


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