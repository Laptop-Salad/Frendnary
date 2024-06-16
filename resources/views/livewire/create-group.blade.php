<div class="p-20 flex flex-col items-center text-center">
    <div class="max-w-1">
        <img src="/images/friend-hug.png" alt="Friends hugging">
    </div>
    <h1 class="text-3xl">Create Friend Group</h1>

    <div class="flex justify-center w-full my-4">
        <div class="w-1/2">
            <form wire:submit="save">
                <x-text-input wire:model="name" id="name" class="block mt-1 w-full"
                              name="name" required />
                <x-pack.button type="submit" class="mt-4" color="bg-fpurple">Create</x-pack.button>
            </form>
        </div>
    </div>

    @if ($error)
        <p class="text-red-500">{{$this->error}}</p>
    @endif
</div>
