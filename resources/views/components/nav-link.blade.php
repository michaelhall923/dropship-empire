@props([
    'route'
])

@php
    $classes = Request::routeIs($route) ? 'text-red-500' : 'hover:text-red-500'
@endphp

<a href="{{ route($route) }}" {{ $attributes->merge(['class' => "px-6  $classes"]) }}>{{ $slot }}</a>
