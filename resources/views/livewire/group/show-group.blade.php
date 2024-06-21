<div class="md:p-20 p-5">
    <h1 class="font-bold text-3xl">{{$group->name}}</h1>

    <div class="mt-4">
        <div class="flex md:flex-row flex-col md:space-y-0 space-y-2 md:space-x-2">
            <x-pack.button wire:click="showCreateDefModal">
                New definition
            </x-pack.button>

            <x-pack.button wire:click="showInviteModal">
                Invite friend
            </x-pack.button>
        </div>

        <div class="mt-4 md:grid md:grid-cols-2 space-x-2">
            <x-text-input class="w-full" wire:model.live="search" placeholder="Search for name, description" />
            <div class="flex items-center">
                <p class="text-greyed font-semibold">Results: {{$this->definitions->count()}}</p>
            </div>
        </div>

        <div class="md:mt-10 mt-4 space-y-4">
            @foreach($this->definitions as $definition)
                <div wire:key="{{$definition->id}}" class="border-b border-slate-300 md:p-5 p-2 grid grid-rows-4 md:grid-cols-4">
                    <div class="row-span-3 md:col-span-3">
                        @php($type = \App\Definitions\Type::from($definition->type))
                        <div class="{{$type->colour()}} p-1 inline-block mb-2 rounded-sm font-semibold">
                            {{$type->name}}
                        </div>

                        <div class="md:flex md:space-x-2 items-center mb-2">
                            <h2 class="text-xl font-semibold">{{$definition->name}}</h2>
                            <p>{{$definition->created_at->diffForHumans()}}</p>
                        </div>
                        <p>
                            {{$definition->definition}}
                        </p>
                        <p class="my-2 text-gray-600 text-sm">Submitted by {{$definition->creator->name}}</p>
                    </div>
                    <div class="flex items-center justify-start md:justify-end space-x-2">
                        <x-pack.button
                            wire:click="editDefinition({{$definition}})"
                            color="bg-action">Edit</x-pack.button>
                        <x-pack.button
                            wire:click="deleteDefinition({{$definition}})"
                            wire:confirm="Are you sure you want to delete this definition?"
                            color="bg-danger">Delete
                        </x-pack.button>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-4">
            {{$this->definitions->links()}}
        </div>
    </div>

    <x-group.definition-modal />

    <x-group.invite-friend />
</div>
