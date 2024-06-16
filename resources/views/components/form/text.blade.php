@props(['name', 'help', 'type' => 'text'])

<div class="space-y-1">
    <x-input-label>{{$name}}</x-input-label>
    <p class="text-gray-600 text-sm">{{$help}}</p>
    <x-text-input type="{{$type}}" class="w-full" {{$attributes}} />
</div>
