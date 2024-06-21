<div class="p-20">
    <h1 class="font-bold text-3xl">{{$greeting}} {{ auth()->user()->name }}</h1>

    <div class="flex gap-4 my-4">
        <x-pack.button wire:click="toggleCreateGroup">Create Friend Group</x-pack.button>
    </div>

    @if (auth()->user()->invites->isEmpty() && auth()->user()->groups->isEmpty())
        <p class="mt-4">To get started click "Create Group" or ask a friend to invite you to theirs!</p>
    @endif

    @if (auth()->user()->invites->isNotEmpty())
        <div class="my-4">
            <h2 class="text-2xl">Invites</h2>

            <div class="my-2 flex flex-wrap gap-4">
                @foreach(auth()->user()->invites as $invite)
                    <div>
                        <x-pack.button color="bg-fyellow" wire:click="acceptInvite({{$invite}})">Accept invite to {{$invite->group->name}}</x-pack.button>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    @if (auth()->user()->groups->isNotEmpty())
        <div class="my-4">
            <h2 class="text-2xl">Groups</h2>

            <div class="my-2 flex flex-wrap gap-4">
            @foreach(auth()->user()->groups as $group)
                <div>
                    <x-pack.link :route="route('groups.group', $group->slug)">{{$group->name}}</x-pack.link>
                </div>
            @endforeach
            </div>
        </div>
    @endif

    <x-pack.modal title="Create Friend Group" show="show_create_group">
        <div class="text-center w-full my-4">
            <form wire:submit="save">
                <x-text-input wire:model="name" id="name" class="block mt-1 w-full"
                              name="name" required />

                <x-pack.button type="submit" class="mt-4">Create</x-pack.button>
            </form>
        </div>

        @if ($error)
            <p class="text-red-500">{{$this->error}}</p>
        @endif
    </x-pack.modal>
</div>
