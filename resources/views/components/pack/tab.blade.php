@props(['route'])

<a href="{{$route}}"
   class="text-center text-lg border-transparent p-2 border-b-2 hover:border-action">
    {{$slot}}
</a>
