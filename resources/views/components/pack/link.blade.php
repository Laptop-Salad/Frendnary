@props(['route', 'color' => 'bg-action'])

<div {{ $attributes->merge([
        'class' => $color . " px-4 py-2 rounded-sm hover:shadow-lg transition-shadow"
    ])}}>
    <a href="{{$route}}" class="font-bold">
        {{ $slot }}
    </a>
</div>
