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
        <header class="bg-pgreen grid grid-cols-2 px-8 py-2 bg-fgreen" x-data="{openMenu : false}">
            <div class="flex items-center">
                <x-pack.link :route="route('home')" color="transparent" class="hover:shadow-none">Frendnary</x-pack.link>
            </div>
            <div class="flex justify-end md:hidden">
                <x-pack.button
                    class="hover:shadow-none"
                    @click="openMenu = !openMenu"
                    icon="fa-solid fa-burger"
                    color="transparent">
                </x-pack.button>
            </div>
            <nav x-show="openMenu">
                <div class="space-y-2 relative z-20 bg-fgreen">
                    <x-pack.link :route="route('groups.create')" color="bg-fpurple">Create Friend Group</x-pack.link>
                    <x-pack.link :route="route('dashboard')" color="bg-fyellow">Me</x-pack.link>
                    <x-pack.button wire:click="logout" color="bg-fpink" icon="fa-solid fa-door-open" icon_pos="right">
                        {{ __('Log Out') }}
                    </x-pack.button>
                </div>
            </nav>
            <nav class="hidden md:block">
                <div class="flex justify-end space-x-2">
                    <x-pack.link :route="route('groups.create')" color="bg-fpurple">Create Friend Group</x-pack.link>
                    <x-pack.link :route="route('dashboard')" color="bg-fyellow">Me</x-pack.link>
                    <x-pack.button wire:click="logout" color="bg-fpink" icon="fa-solid fa-door-open" icon_pos="right">
                        {{ __('Log Out') }}
                    </x-pack.button>
                </div>
            </nav>
        </header>
@else
    <header class="bg-pgreen grid grid-cols-2 px-8 py-2 bg-fgreen" x-data="{openMenu : false}">
        <div class="flex items-center">
            <x-pack.link route="home" color="transparent">Frendnary</x-pack.link>
        </div>
        <div class="flex justify-end md:hidden">
            <x-pack.button
                @click="openMenu = !openMenu"
                icon="fa-solid fa-burger"
                color="transparent">
            </x-pack.button>
        </div>
        <nav x-show="openMenu">
            <div class="space-x-2 relative z-20 bg-fgreen">
                <x-pack.link :route="route('login')" color="transparent">Login</x-pack.link>
                <x-pack.link :route="route('register')">Register</x-pack.link>
            </div>
        </nav>
        <nav class="hidden md:block">
            <div class="flex justify-end space-x-2">
                <x-pack.link :route="route('login')" color="transparent">Login</x-pack.link>
                <x-pack.link :route="route('register')">Register</x-pack.link>
            </div>
        </nav>
    </header>
@endif
</div>
