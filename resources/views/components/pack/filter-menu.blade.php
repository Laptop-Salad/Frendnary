@props(['title'])

<div x-data="{ show: false}">
    <x-pack.button
        class="w-48"
        @click="show = !show">
        Filter {{$title}}
    </x-pack.button>

    <div x-show="show" class="absolute z-10 w-48 bg-fwhite rounded-b-md shadow dark:bg-gray-700">
        <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200">
            {{$slot}}
        </ul>
    </div>
</div>
