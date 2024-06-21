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
