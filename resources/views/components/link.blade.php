@props(['location' => '/', 'color' => 'pblue'])

<a href="{{ $location }}" class="px-4 py-2 bg-{{ $color }} font-bold">
    {{ $slot }}
</a>