<div class="flex justify-center m-10">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-4 w-full max-w-5xl">

        <div class="crd crd-color1 row-span-2 w-full min-w-[280px] sm:min-w-[320px] max-w-xs sm:max-w-sm">
            <div class="crd-content">
                <div class="crd-top">
                    <span class="crd-title">01.</span>
                    <p>Publications {{$publication1->count()}}</p>
                </div>
                <div class="crd-bottom">
                    <p>Projects {{$projects1->count()}}</p>
                </div>
            </div>
            <div class="crd-image">
                <img src="/images/nopoverty.svg" alt="" class="w-32 h-32 md:w-40 md:h-40">
            </div>
        </div>

        <div class="crd crd-color2 w-full min-w-[280px] sm:min-w-[320px] max-w-xs sm:max-w-sm">
            <div class="crd-content">
                <div class="crd-top">
                    <span class="crd-title">02.</span>
                    <p>Publications {{$publication2->count()}}</p>
                </div>
                <div class="crd-bottom">
                    <p>Projects {{$projects2->count()}}</p>
                </div>
            </div>
            <div class="crd-image">
                <img src="/images/sdg2svg.svg" alt="" class="w-20 h-20 md:w-24 md:h-24">
            </div>
        </div>

        <div class="crd crd-color3 w-full min-w-[280px] sm:min-w-[320px] max-w-xs sm:max-w-sm">
            <div class="crd-content">
                <div class="crd-top">
                    <span class="crd-title">03.</span>
                    <p>Publications {{$publication3->count()}}</p>
                </div>
                <div class="crd-bottom">
                    <p>Projects {{$projects3->count()}}</p>
                </div>
            </div>
            <div class="crd-image">
                <img src="/images/sdg3svg.svg" alt="" class="w-20 h-20 md:w-24 md:h-24">
            </div>
        </div>

    </div>
</div>

<style>
    .crd {
        width: 100%;
        max-width: 280px;
        min-width: 250px;
        color: black;
        position: relative;
        /* border-radius: 2.5em; */
        transition: transform 0.4s ease;
    }

    .crd-color1 {
        background: rgb(255, 189, 189);
        background: radial-gradient(circle, rgba(255, 189, 189, 1) 0%, rgba(255, 82, 82, 1) 100%);
    }

    .crd-color2 {
        background: rgb(255, 243, 218);
        background: radial-gradient(circle, rgba(255, 243, 218, 1) 0%, rgba(221, 167, 58, 1) 100%);
    }

    .crd-color3 {
        background: rgb(191, 238, 187);
        background: radial-gradient(circle, rgba(191, 238, 187, 1) 0%, rgba(76, 161, 70, 1) 100%);
    }

    .crd .crd-content {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        gap: 4em;
        height: 100%;
        padding: 30px;
        transition: transform 0.4s ease;
    }

    .crd .crd-top,
    .crd .crd-bottom {
        display: flex;
        justify-content: space-between;
    }

    .crd .crd-title {
        font-weight: bold;
    }

    .crd .crd-top p,
    .crd .crd-bottom p {
        font-weight: 600;
    }

    .crd .crd-bottom {
        align-items: flex-end;
    }

    .crd .crd-image {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        display: grid;
        place-items: center;
        pointer-events: none;
    }

    .crd:hover {
        transform: scale(0.97);
    }

    .crd:hover .crd-content {
        transform: scale(0.96);
    }

    .crd:hover .crd-image img {
        transform: scale(1.05);
    }

    .crd:active {
        transform: scale(0.9);
    }

    @media (max-width: 640px) {
        .crd {
            max-width: 100%;
        }

        .crd .crd-content {
            gap: 3em;
            padding: 20px;
        }

        .crd .crd-image img {
            width: 80px;
            height: 80px;
        }
    }
</style>