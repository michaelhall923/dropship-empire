@props(['bgColor' => ''])

<div class="bg-blue-100 p-4 mb-4" style="{{ $bgColor ? "background-color: $bgColor;" : '' }}">
    {{ $slot }}
</div>
