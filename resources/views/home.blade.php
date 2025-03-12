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
        body {
            background: rgb(71, 161, 129);
            background: linear-gradient(260deg, rgba(71, 161, 129, 0.9819327389158788) 0%, rgba(30, 189, 95, 0.12198876132484249) 0%, rgba(0, 212, 255, 0) 100%);
        }

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
            color: white;
            transform: translateX(-50%);
            /* background-color: rgb(213, 247, 220); */
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

<body>
    @include('layouts.navbar')
    @include('layouts.hero')















    @include('layouts.about')


    {{-- @include('layouts.threepar',['publication1'=>$publication1, 'publication2'=>$publication2,
    'publication3'=>$publication3, 'projects1'=>$projects1, 'projects2'=>$projects2, 'projects3'=>$projects3, ]) --}}

    {{--
    <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4 px-4">
        <!-- First Item -->
        <div class="relative bg-red-400 p-6 min-h-[300px] sm:h-22 rounded-lg overflow-hidden flex flex-col items-center justify-center text-black text-center"
            style="background-image: url('https://images.unsplash.com/photo-1528459801416-a9e53bbf4e17?q=80&w=2024&auto=format&fit=crop');
                background-size: cover; background-position: center; background-blend-mode: soft-light; opacity: 0.9;">
            <hr class="border-black my-2 w-full">
            <img src="/images/nopoverty.svg" alt="No Poverty" class="w-64    h-64">
            <p class="text-md sm:text-xl md:text-2xl lg:text-2xl  font-bold">Projects {{ $projects1->count() }}</p>
            <p class="text-md sm:text-xl md:text-2xl lg:text-2xl  font-bold">Publications: {{ $publication1->count() }}
            </p>
        </div>

        <!-- Second Item -->
        <div class="relative bg-yellow-400 p-6 min-h-[300px] sm:h-22 rounded-lg overflow-hidden flex flex-col items-center justify-center text-black text-center"
            style="background-image: url('https://images.unsplash.com/photo-1615749413727-825b59a857b5?q=80&w=1974&auto=format&fit=crop');
                background-size: cover; background-position: center; background-blend-mode: soft-light; opacity: 0.9;">
            <hr class="border-black my-2 w-full">
            <img src="/images/sdg2svg.svg" alt="Zero Hunger" class="w-64     h-64">
            <p class="text-md sm:text-xl md:text-2xl lg:text-2xl  font-bold">Projects {{ $projects2->count() }}</p>
            <p class="text-md sm:text-xl md:text-2xl lg:text-2xl  font-bold">Publications: {{ $publication2->count() }}
            </p>
        </div>

        <!-- Third Item (Centered on Small Screens) -->
        <div class="relative bg-green-400 p-6 min-h-[300px] sm:h-22 rounded-lg overflow-hidden flex flex-col items-center justify-center text-black text-center col-span-full sm:col-span-2 md:col-span-1"
            style="background-image: url('https://images.unsplash.com/photo-1561212044-bac5ef688a07?q=80&w=1974&auto=format&fit=crop');
                background-size: cover; background-position: center; background-blend-mode: soft-light; opacity: 0.9;">
            <hr class="border-black my-2 w-full">
            <img src="/images/sdg3svg.svg" alt="No Poverty" class="w-64  h-64">
            <p class="text-md sm:text-xl md:text-2xl lg:text-2xl  font-bold">Projects {{ $projects3->count() }}</p>
            <p class="text-md sm:text-xl md:text-2xl lg:text-2xl  font-bold">Publications: {{ $publication3->count() }}
            </p>
        </div>
    </div> --}}



    <div class="icontainer mt-24">
        <div class="text-center text-5xl font-semibold  " style="color: #004d4d;">Goals</div>
        <div class="card-containerr">
            @foreach ($goals as $goal)
                <a href="{{ route('goal.details', $goal['id']) }}" class="cardd"
                    style="background-image: url('{{ asset($goal['backgroundImage'] ?? '') }}');">
                    <img class="icon-imagee" src="{{ asset($goal['iconImage']) }}" alt="Icon {{ $goal['id'] + 1 }}">
                    <div class="overlayy">
                        {{-- <h2>{{ $goal['text'] }}</h2> --}}
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