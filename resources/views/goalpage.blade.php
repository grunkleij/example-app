<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/herogoal.css') }}">
    <style>
         body {
            background: rgb(71, 161, 129);
            background: linear-gradient(260deg, rgba(71, 161, 129, 0.9819327389158788) 0%, rgba(30, 189, 95, 0.12198876132484249) 0%, rgba(0, 212, 255, 0) 100%);
        }
        .project-card {
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
            z-index: 10;
            /* Ensure the whole card is clickable */
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


        .project-card {
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
            z-index: 10;
            /* Ensure the whole card is clickable */
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
            color:white;
            bottom: -250px;
            left: 50%;
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

    <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/paragraph@latest"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body>
    @include('layouts.navbar')
    @include('layouts.herogoalpage', ['goalNumber' => $goal['id']]) 
    @include('layouts.aboutgoal', ['goalHeading' => $goal['heading'], 'goalabout' => $goal['about_goal']])

    <div class="container mx-auto mt-8 p-6   rounded-lg">
        <h1 class="text-4xl  mb-4 font-semibold text-center" style="color:#004d4d;">Projects</h1>

        @if($projects->isEmpty())
            <p class="text-red-500 text-center">No projects found for this SDG.</p>
        @else
            <!-- Responsive grid for projects -->
            <div id="regular-projects" class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($projects->where('upcoming_project', false) as $index => $project)
                    <a href="{{ route('projectpage.page', $project->id)}}"
                        class="project-card  shadow-lg rounded-lg text-center">
                        @if($project->photo)
                            <div class="relative">
                                <img src="data:image/jpeg;base64,{{ base64_encode($project->photo) }}" alt="Project Image"
                                    class="project-image rounded">
                                <div class="project-overlay"></div>
                                <div class="project-text">{{ $project->project_name }}</div>
                            </div>
                        @else
                            <p class="text-gray-500 mt-2">No image available</p>
                        @endif
                    </a>
                @endforeach
            </div>

            @if($projects->where('upcoming_project', false)->count() > 6)
                <div class="text-center">
                    <button id="show-more"
                        class="w-24 mt-5 px-4  bg-green-500 text-white rounded-lg hover:bg-green-700 text-center">
                        <img src="/images/downarrow.svg" alt="" class="w-6 h-7 mx-auto">
                    </button>
                    <button id="show-less" class="mt-5 w-24 px-4  bg-red-500 text-white rounded-lg hover:bg-red-700 hidden">
                        <img src="/images/uparrow.svg" alt="" class="w-6 h-7 mx-auto">
                    </button>
                </div>
            @endif

            <h2 class="text-3xl font-semibold mt-8 text-center " style="color:#004d4d;">Upcoming Projects</h2>
            <div class="grid grid-cols-2  sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($projects->where('upcoming_project', true) as $project)
                    <div class="project-card  shadow-lg rounded-lg text-center">
                        @if($project->photo)
                            <div class="relative">
                                <img src="data:image/jpeg;base64,{{ base64_encode($project->photo) }}" alt="Project Image"
                                    class="project-image rounded">
                                <div class="project-overlay"></div>
                                <div class="project-text">{{ $project->project_name }}</div>
                            </div>
                        @else
                            <p class="text-gray-500 mt-2">No image available</p>
                        @endif
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    <div class="m-10">
        <p class="text-2xl font-bold">Publications</p>
        
        @if (!empty($publications) && $publications->count() > 0)
            @foreach ($publications as $publication)
                <a href="{{ $publication->publication_link }}" target="_blank" 
                    class="mx-4 text-lg text-green-500 hover:text-green-900">
                    <hr>
                    {{ $publication->title }}
                    <hr>
                </a>
            @endforeach
        @else
            <p class="text-red-500">No publications available.</p>
        @endif
    </div>
    




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

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let showMoreBtn = document.getElementById('show-more');
            let showLessBtn = document.getElementById('show-less');
            let projectCards = document.querySelectorAll("#regular-projects .project-card");

            // Hide extra projects initially
            projectCards.forEach((card, index) => {
                if (index >= 6) card.classList.add('hidden');
            });

            // Show More Button Click
            showMoreBtn?.addEventListener("click", function () {
                projectCards.forEach(card => card.classList.remove("hidden"));
                showMoreBtn.classList.add("hidden");
                showLessBtn.classList.remove("hidden");
            });

            // Show Less Button Click
            showLessBtn?.addEventListener("click", function () {
                projectCards.forEach((card, index) => {
                    if (index >= 6) card.classList.add("hidden");
                });
                showLessBtn.classList.add("hidden");
                showMoreBtn.classList.remove("hidden");
            });
        });
    </script>


</body>

</html>