@props(['location' => '/', 'color' => 'bg-fpurple'])

<div class="{{ $color }} px-4 py-2">
    <a href="{{ $location }}" class="font-bold">
        {{ $slot }}
    </a>
</div>