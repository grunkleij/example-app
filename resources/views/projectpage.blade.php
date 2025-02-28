<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/herogoal.css') }}">
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


        .project-card {
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
        }

        .project-card:hover {
            transform: scale(1.05);
        }

        .project-image {
            width: 100%;
            height: 40vh;
            object-fit: cover;
        }

        .project-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
        }

        .project-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            padding: 10px;
            font-size: 1.2rem;
            font-weight: bold;
            text-align: center;
            width: 80%;
            transition: transform 0.3s ease-in-out;
        }

        .project-card:hover .project-text {
            transform: translate(-50%, -50%) scale(1.2);
        }

        @media (max-width: 1024px) {
            .project-card {
                max-width: 300px;
            }

            .project-image {
                height: 25vh;
            }

            .project-text {
                font-size: 0.9rem;
            }
        }

        /* Further reduce card size on small screens (phones) */
        @media (max-width: 640px) {
            .project-card {
                max-width: 150px;
            }

            .project-image {
                height: 20vh;
            }

            .project-text {
                font-size: 0.8rem;
            }
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/paragraph@latest"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body>
    @include('layouts.navbar')
    @include('layouts.herogoalpage', ['goalNumber' => 3]) 
    @include('layouts.aboutproject', ['goalHeading' => $project['project_name'], 'goalabout' => $project['description']])
    <div class="m-20">
        <h2 class="text-center text-5xl font-semibold bg-gradient-to-br from-emerald-500 to-teal-600 bg-clip-text text-transparent">
            Addressed SDGs
        </h2>
    <div class="flex flex-wrap justify-center gap-4 mt-8">
        @foreach ($project->addressed_sdg as $sdg)
            <div class="flex flex-col items-center w-20">
                <img class="w-full h-auto" src="{{ asset('/img/E_SDG_Icons-' . str_pad($sdg, 2, '0', STR_PAD_LEFT) . '.jpg') }}" alt="SDG {{ $sdg }}">
                <h3 class="mt-2 text-lg font-semibold text-center text-gray-800">SDG {{ $sdg }}</h3>
            </div>
        @endforeach
    </div>
</div>


    <div class="icontainer">
        <div
            class="text-center text-5xl font-semibold bg-gradient-to-br from-emerald-500 to-teal-600 bg-clip-text text-transparent">
            Goals</div>
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

</body>

</html>