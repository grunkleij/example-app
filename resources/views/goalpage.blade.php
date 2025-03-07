<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/herogoal.css') }}">
    <style>
        .project-card {
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
            z-index: 10; /* Ensure the whole card is clickable */
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
            }}


              .project-card {
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
            z-index: 10; /* Ensure the whole card is clickable */
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
            }}

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

    <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/paragraph@latest"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body>
    @include('layouts.navbar')
    @include('layouts.herogoalpage', ['goalNumber' => $goal['id']]) 
    @include('layouts.aboutgoal', ['goalHeading' => $goal['heading'], 'goalabout' => $goal['about_goal']])

    <div class="container mx-auto mt-8 p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold mb-4 text-center">Projects</h1>

        @if($projects->isEmpty())
            <p class="text-red-500 text-center">No projects found for this SDG.</p>
        @else
            <!-- Responsive grid for projects -->
            <div id="regular-projects" class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($projects->where('upcoming_project', false) as $index => $project)
                    <a href="{{ route('projectpage.page', $project->id )}}"  class="project-card bg-white shadow-lg rounded-lg text-center">
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
                    <button id="show-more" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">Show
                        More</button>
                    <button id="show-less" class="mt-4 px-4 py-2 bg-red-500 text-white rounded hover:bg-red-700 hidden">Show
                        Less</button>
                </div>
            @endif

            <h2 class="text-xl font-bold mt-8 text-center">Upcoming Projects</h2>
            <div class="grid grid-cols-2  sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($projects->where('upcoming_project', true) as $project)
                    <div class="project-card bg-white shadow-lg rounded-lg text-center">
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

    <div class="icontainer">
        <div class="text-center text-5xl font-semibold bg-gradient-to-br from-emerald-500 to-teal-600 bg-clip-text text-transparent">Goals</div>
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