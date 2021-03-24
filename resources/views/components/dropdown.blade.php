@props([
    'width' => '40',
    'alignment' => 'left'
])

@php
    $alignmentClasses = [
        'left' => 'left-0',
        'right' => 'right-0'
    ]
@endphp

<div x-data="{ open: false }" @click.away="open = false" class="relative">
    <div @click="open = !open">
        {{ $trigger }}
    </div>

    <div
        class="absolute z-20 bg-white rounded shadow-md py-1 mt-1 w-{{ $width }} {{ $alignmentClasses[$alignment] }} text-black"
        x-show="open"
        x-transition:enter="transition transform duration-300"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end=""
        x-transition:leave="transition transform duration-300"
        x-transition:leave-start=""
        x-transition:leave-end="opacity-0 scale-95"
    >
        {{ $slot }}
    </div>
</div>
