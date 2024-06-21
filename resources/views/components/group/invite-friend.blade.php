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
