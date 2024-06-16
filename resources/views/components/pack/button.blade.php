@props(['color' => 'bg-fpurple', 'type' => 'button', 'icon' => '', 'icon_pos' => 'left'])

<button {{ $attributes->merge([
            'class' =>  "px-4 py-2 space-x-2 cursor-pointer transition-shadow rounded-sm hover:shadow-lg " . $color
        ]) }}
        type="{{ $type }}">

    @if ($icon_pos == 'left' && !empty($icon))
        <i class="{{ $icon }}"></i>
    @endif

    <span class="font-bold">{{ $slot }}</span>

    @if ($icon_pos == 'right' && !empty($icon))
        <i class="{{ $icon }}"></i>
    @endif
</button>
