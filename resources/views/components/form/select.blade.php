@props(['name', 'help' => ''])

<div class="space-y-1">
    <x-input-label>{{$name}}</x-input-label>
    <p class="text-gray-600 text-sm">{{$help}}</p>

    <select class="w-full rounded-md shadow-sm" {{$attributes}}>
        {{$slot}}
    </select>
</div>
