<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<div>
    @if (auth()->user())
    <header class="bg-pgreen grid grid-cols-2 px-8 py-2 bg-fgreen">
        <div class="flex items-center">
            <x-pack.link location="/dashboard" color="transparent">Frendnary</x-pack.link>
        </div>
        <nav>
            <div class="flex justify-end space-x-2">
                <x-pack.link location="/createfriendgroup" color="bg-fpurple">Create Friend Group</x-pack.link>
                <x-pack.link location="/dasboard" color="bg-fyellow">Me</x-pack.link>
                <x-pack.button wire:click="logout" color="bg-fpink" icon="fa-solid fa-door-open" icon_pos="right">
                    {{ __('Log Out') }}
                </x-pack.button>
            </div>
        </nav>
    </header>
@else
    <header class="bg-pgreen grid grid-cols-2 px-8 py-2 bg-fgreen">
        <div class="flex items-center">
            <x-pack.link location="/" color="transparent">Frendnary</x-pack.link>
        </div>
        <nav>
            <div class="flex justify-end space-x-2">
                <x-pack.link location="/login" color="transparent">Login</x-pack.link>
                <x-pack.link location="/register">Register</x-pack.link>
            </div>
        </nav>
    </header>
@endif
</div>