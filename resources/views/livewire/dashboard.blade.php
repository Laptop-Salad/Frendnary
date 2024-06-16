<div class="p-20">
    <h1 class="font-bold text-3xl">{{$greeting}} {{ auth()->user()->name }}</h1>

    <div class="my-4">
        <h2 class="text-2xl">Invites</h2>

        <div class="my-2 grid md:grid-cols-4 gap-4 md:gap-8">
            @foreach(auth()->user()->invites as $invite)
                <div>
                    <x-pack.button color="bg-fyellow" wire:click="acceptInvite({{$invite}})">Accept invite to {{$invite->group->name}}</x-pack.button>
                </div>
            @endforeach
        </div>
    </div>

    <div class="my-4">
        <h2 class="text-2xl">Groups</h2>

        <div class="my-2 grid md:grid-cols-4 gap-4 md:gap-8">
        @foreach(auth()->user()->groups as $group)
            <div>
                <x-pack.link :route="route('groups.group', $group->slug)">{{$group->name}}</x-pack.link>
            </div>
        @endforeach
        </div>
    </div>
</div>
