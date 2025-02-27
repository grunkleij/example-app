@php
    $goalContent = json_decode($goalabout, true);
@endphp

<div class="max-w-3xl left-50 p-6 bg-white rounded-2xl">
    @if(is_array($goalContent) && isset($goalContent['blocks']))
        @foreach($goalContent['blocks'] as $block)
            @if(isset($block['type'], $block['data']['text']))
                @if($block['type'] === 'header')
                    <h2 class="text-4xl font-extrabold mt-6 text-gray-900 border-b-4 border-blue-500 pb-2">
                        {{ $block['data']['text'] }}
                    </h2>
                @elseif($block['type'] === 'paragraph')
                    <p class="mt-4 text-lg text-gray-700 leading-relaxed">
                        {{ $block['data']['text'] }}
                    </p>
                @endif
            @endif
        @endforeach
    @else
        <p class="text-red-500 font-semibold text-center">Invalid content format</p>
    @endif
</div>
