
@php
    $goals = [
        1 => ["No Poverty", "/images/sdg1.jpg"],
        2 => ["Zero Hunger", "/images/sdg2.jpg"],
        3 => ["Good Health", "/images/sdg3.jpg"],
        4 => ["Quality Education", "/images/sdg4.jpg"],
        5 => ["Gender Equality", "/images/sdg5.jpg"],
        6 => ["Clean Water", "/images/sdg6.jpg"],
        7 => ["Affordable Energy", "/images/sdg7.jpg"],
        8 => ["Decent Work", "/images/sdg8.jpg"],
        9 => ["Industry & Innovation", "/images/sdg9.jpg"],
        10 => ["Reduced Inequalities", "/images/sdg10.jpg"],
        11 => ["Sustainable Cities", "/images/sdg11.jpg"],
        12 => ["Responsible Consumption", "/images/sdg12.jpg"],
        13 => ["Climate Action", "/images/sdg13.jpg"],
        14 => ["Life Below Water", "/images/sdg14.jpg"],
        15 => ["Life on Land", "/images/sdg15.jpg"],
        16 => ["Peace & Justice", "/images/sdg16.jpg"],
        17 => ["Partnerships for Goals", "/images/sdg17.jpg"],
    ];

    $goalNumber = $goalNumber ?? 1; // Default to Goal 1 if not provided
    $goalText = $goals[$goalNumber][0];
    $goalImage = $goals[$goalNumber][1];
@endphp

<div class="hero">
    <div class="hero_content">
        <h1 class="heading-hero text-focus-in">
            <!-- Rajagiri
            <br /> -->
            <span>{{ $goalText }}</span>
        </h1>
        <div class="explore">
                <!-- <div style=" padding: 1rem 2rem; border-radius: 1.25rem; display: inline-block;">
                    <div style="color: rgb(124, 124, 124); font-family: 'Poppins', sans-serif; font-weight: 500;
            font-size: 25px; box-sizing: content-box; height: 37px; padding: 10px 10px;
            display: flex; border-radius: 8px; position: relative;">
                        <p class="text-white">GOALS</p>
                        <div style="overflow: hidden; position: relative;">
                        <div style="display: block; height: 100%; padding-left: 6px; color: #d5f7dc;
                animation: spin_4991 17s infinite;">
        
                                <span style="display: block;">No Poverty</span>
                                <span style="display: block;">Zero Hunger</span>
                                <span style="display: block;">Good Health</span>
                                <span style="display: block;">Quality Education</span>
                                <span style="display: block;">Gender Equality</span>
                                <span style="display: block;">Clean Water</span>
                                <span style="display: block;">Affordable Energy</span>
                                <span style="display: block;">Decent Work</span>
                                <span style="display: block;">Industry & Innovation</span>
                                <span style="display: block;">Reduced Inequalities</span>
                                <span style="display: block;">Sustainable Cities</span>
                                <span style="display: block;">Responsible Consumption</span>
                                <span style="display: block;">Climate Action</span>
                                <span style="display: block;">Life Below Water</span>
                                <span style="display: block;">Life on Land</span>
                                <span style="display: block;">Peace & Justice</span>
                                <span style="display: block;">Partnerships for Goals</span>
        
                            </div>
                        </div>
                    </div>
                </div> -->
            <p class="tst">
                <!-- <button onclick="scrollToTest()" class="relative btn-hero">EXPLORE</button> 
                Go to <strong>Goals.</strong> -->

            <style>
                @keyframes spin_4991 {
                    0% {
                        transform: translateY(0);
                    }

                    5.88% {
                        transform: translateY(-100%);
                    }

                    /* 1/17 steps */
                    11.76% {
                        transform: translateY(-200%);
                    }

                    17.64% {
                        transform: translateY(-300%);
                    }

                    23.52% {
                        transform: translateY(-400%);
                    }

                    29.4% {
                        transform: translateY(-500%);
                    }

                    35.28% {
                        transform: translateY(-600%);
                    }

                    41.16% {
                        transform: translateY(-700%);
                    }

                    47.04% {
                        transform: translateY(-800%);
                    }

                    52.92% {
                        transform: translateY(-900%);
                    }

                    58.8% {
                        transform: translateY(-1000%);
                    }

                    64.68% {
                        transform: translateY(-1100%);
                    }

                    70.56% {
                        transform: translateY(-1200%);
                    }

                    76.44% {
                        transform: translateY(-1300%);
                    }

                    82.32% {
                        transform: translateY(-1400%);
                    }

                    88.2% {
                        transform: translateY(-1500%);
                    }

                    94.08% {
                        transform: translateY(-1600%);
                    }

                    100% {
                        transform: translateY(-1700%);
                    }
                }
            </style>

            </p>
        </div>
    </div>
    <div class="picture">
        <p></p>
        <!-- Picture by 
        <a href="https://unsplash.com/@hernanlucio" target="_blank">@hernanlucio</a> -->
    </div>
</div>

<script>
    function scrollToTest() {
        document.getElementById("test-section").scrollIntoView({ behavior: "smooth" });
    }
</script>