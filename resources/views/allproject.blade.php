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



</head>

<body class="bg-[#fdfaf4]" style="  background: rgb(231,255,242);
background: linear-gradient(180deg, rgba(231,255,242,1) 0%, rgba(194,223,192,1) 100%);  ">
  @include('layouts.navbar')
  <h1 class="mt-30">Projects</h1>
  <div class="flex flex-wrap item-center justify-center mt-20">

    @foreach ($project as $proj)

    <div class=" m-5 bg-red-800 h-60 w-80 rounded-2xl  overflow-hidden relative" style="background-image: url('data:image/jpeg;base64,{{ base64_encode($proj->photo) }}'); 
      background-size: cover; background-position: center;">
      <div class="h-20 bg-black absolute w-full bottom-0" style="background: rgba( 0, 0, 0, 0.5 );
      box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
      backdrop-filter: blur( 3px );
      -webkit-backdrop-filter: blur( 3px );
      border: 1px solid rgba( 255, 255, 255, 0.18 ); color:white;">
      <div class="m-4">
        {{ $proj->project_name }}

      </div>
      </div>
    </div>
  @endforeach
  </div>


</body>

</html>