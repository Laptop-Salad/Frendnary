@props(['color' => 'bg-fpurple', 'type' => 'button', 'icon' => '', 'icon_pos' => 'left'])

<button {{ $attributes }} type="{{ $type }}" class="{{ $color }} px-4 py-2 space-x-2">
    @if ($icon_pos == 'left')
        <i class="{{ $icon }}"></i>
    @endif 

    <span class="font-bold">{{ $slot }}</span>

    @if ($icon_pos == 'right')
        <i class="{{ $icon }}"></i>
    @endif 
</button>
