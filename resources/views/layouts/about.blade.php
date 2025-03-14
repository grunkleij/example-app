<div id="test-section" class="relative isolate lg:flex h-full  lg:justify-between overflow-hidden  py-20  sm:py-[3.3rem]" >
    
    <!-- {{-- Glassmorphism Shape --}}
    <div class="absolute inset-0 z-0 flex items-center justify-center">
        <div class="w-72 h-72 bg-green-300 rounded-full opacity-30 blur-3xl backdrop-blur-lg"></div>
    </div>
    <div class="absolute inset-0 z-0 flex top-0 -left-4">
        <div class="w-72 h-72 bg-purple-300 rounded-full opacity-30 blur-3xl backdrop-blur-lg"></div>
    </div>

    {{-- Background Shapes --}}
    <div
        aria-hidden="true"
        class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl"
    >
        <div
            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
            class="aspect-1097/845 w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
        ></div>
    </div>
    <div
        aria-hidden="true"
        class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu"
    >
        <div
            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
            class="aspect-1097/845 w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
        ></div>
    </div> -->

    {{-- Content --}}
    <div class="relative z-10 mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
            <p class="text-5xl font-semibold tracking-tight sm:text-6xl" style="color: #004d4d;"> 
    About Rajagiri SDG
</p>

            <p class="mt-8 text-lg font-medium text-pretty text-black sm:text-xl/8">
                Sustainability is at the heart of everything we do. When Chancellor Amma spoke at the United Nations in July 2015, she
                stated, “I often reflect deeply on the future of the Earth, the preservation of nature, and the disappearing harmony
                between humanity and nature. This contemplation has led me to the conviction that science, technology, and spirituality
                must unite in order to ensure a sustainable and balanced existence of our world. The present age and the world around us
                demand this transformation.”
            </p>
            <p class="mt-8 text-lg font-medium text-pretty text-black sm:text-xl/8">
                The Amrita Vasudha Initiative at Amrita seeks to be a resource and a force that provides knowledge, energy, motivation,
                and inspiration to the stakeholders of the organization/institution, in turn enabling them to be supportive of, and
                engaging in, sustainable ways of living, and thereby also more effectively participating in, and contributing to, the
                democratic process of governance (in India).
            </p>
        </div>
        
    </div>
    @include('layouts.threepar',['publication1'=>$publication1, 'publication2'=>$publication2, 'publication3'=>$publication3, 'projects1'=>$projects1, 'projects2'=>$projects2, 'projects3'=>$projects3, ])
</div>
