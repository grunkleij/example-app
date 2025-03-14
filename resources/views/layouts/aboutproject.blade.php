@php
    $goalContent = json_decode($goalabout, true);
@endphp

<style>
    
</style>

<div class="  max-w-3xl left-50 p-6 rounded-2xl ml-2 lg:ml-10">
    <p class="text-5xl tracking-tight capitalize sm:text-6xl" style="color:#004d4d">
        {{ $goalHeading }}
    </p>
    @if(is_array($goalContent) && isset($goalContent['blocks']))
        @foreach($goalContent['blocks'] as $block)
            @if(isset($block['type'], $block['data']))
                @if($block['type'] === 'header')
                    <h2 class="text-2xl font-extrabold mt-6 capitalize pb-2" style="color:#004d4d">
                        {{ $block['data']['text'] }}
                    </h2>
                @elseif($block['type'] === 'paragraph')
                    <p class="mt-4 text-lg text-gray-700 leading-relaxed">
                        {!! $block['data']['text'] !!}
                    </p>
                @elseif($block['type'] === 'image' && isset($block['data']['file']['url']))
                    <div class="mt-6 flex justify-center">
                        <img src="{{ $block['data']['file']['url'] }}" alt="Goal Image" class="rounded-lg shadow-md max-w-full h-auto">
                    </div>
                @endif
            @endif
        @endforeach
    @else
        <p class="text-red-500 font-semibold text-center">Invalid content format</p>
    @endif
</div>
