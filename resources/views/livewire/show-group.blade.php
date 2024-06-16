<div class="md:p-20 p-5">
    <h1 class="font-bold text-3xl">{{$group->name}}</h1>

    <div class="mt-4">
        <div class="flex md:flex-row flex-col md:space-y-0 space-y-2 md:space-x-2">
            <x-pack.button wire:click="showCreateDefModal">
                New definition
            </x-pack.button>

            <x-pack.button color="bg-fyellow" wire:click="showInviteModal">
                Invite friend
            </x-pack.button>
        </div>

        <div class="md:mt-10 mt-4 space-y-4">
            @foreach($this->definitions as $definition)
                <div wire:key="{{$definition->id}}" class="border-b border-slate-300 md:p-5 p-2">
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
            @endforeach
        </div>

        <div class="mt-4">
            {{$this->definitions->links()}}
        </div>
    </div>

    <x-pack.modal title="Create Definition" show="show_create_def">
        <form wire:submit="saveDefinition" class="flex flex-col space-y-4">
            <x-form.select name="Type" wire:model="definition_form.type" required>
                <option value="">None Selected</option>

                @foreach(\App\Definitions\Type::cases() as $type)
                    <option value="{{$type}}">{{$type->name}}</option>
                @endforeach
            </x-form.select>

            <x-form.text wire:model="definition_form.name" name="Name" required>
                <x-slot:help>
                    Name for this definition.
                </x-slot:help>
            </x-form.text>

            <x-form.text wire:model="definition_form.definition" name="Description" required>
                <x-slot:help>
                    The description or definition.
                </x-slot:help>
            </x-form.text>

            <x-pack.button type="submit">Create</x-pack.button>
        </form>
    </x-pack.modal>

    <x-pack.modal title="Invite Friend" show="show_invite_friend">
        <form wire:submit="saveInvite" class="flex flex-col space-y-4">
            <x-form.text type="email" wire:model="invite_form.user_email" name="Friend's Email" required>
                <x-slot:help>
                    Ask your friend for the email they used to open an account with us!
                </x-slot:help>
            </x-form.text>

            <x-pack.button type="submit">Create</x-pack.button>
        </form>
    </x-pack.modal>
</div>
