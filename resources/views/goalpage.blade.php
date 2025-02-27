<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/herogoal.css') }}">
    <style>
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
    </style>

    <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/paragraph@latest"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body>
    @include('layouts.navbar')
    @include('layouts.herogoalpage', ['goalNumber' => 3]) 
    @include('layouts.aboutgoal', ['goalHeading' => $goal['heading'], 'goalabout' => $goal['about_goal']])

    <!-- <div class="container">
        <h1>{{ $goal['heading'] }}</h1>
        <p>{{ $goal['about_goal'] }}</p>
    </div> -->
    @include('layouts.goalicons', ['goals' => $goals])

</body>
</body>

</html>