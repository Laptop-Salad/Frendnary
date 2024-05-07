@props(['name', 'color' => 'bg-fpurple'])

<div class="{{ $color }} px-4 py-2">
    <a href="{{ route($name) }}" class="font-bold">
        {{ $slot }}
    </a>
</div>