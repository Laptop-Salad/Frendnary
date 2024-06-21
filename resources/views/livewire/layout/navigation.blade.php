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
    <header class="hidden md:grid grid-cols-2 items-center gap-2 p-5">
        @auth
            <div class="flex items-center">
                <img src="{{ asset('images/friend-hug.png') }}" alt="Frendnary logo" class="w-[50px] me-2">
                <a href="{{route('dashboard')}}" class="font-bold text-xl">Frendnary</a>
            </div>
        @else
            <div class="flex items-center">
                <img src="{{ asset('images/friend-hug.png') }}" alt="Frendnary logo" class="w-[50px] me-2">
                <a href="{{route('home')}}" class="font-bold text-xl">Frendnary</a>
            </div>
        @endauth

        @if (Route::has('login'))
            <nav class="-mx-3 flex items-center justify-end space-x-2">
                @auth
                    <x-pack.tab :route="route('dashboard')" color="bg-primary">Dashboard</x-pack.tab>
                    <x-pack.button wire:click="logout" color="bg-danger" icon="fa-solid fa-door-open" icon_pos="right">
                        {{ __('Log Out') }}
                    </x-pack.button>
                @else
                    <x-pack.tab :route="route('login')">Login</x-pack.tab>
                    <x-pack.tab :route="route('register')">Register</x-pack.tab>
                @endauth
            </nav>
        @endif
    </header>

    <header class="p-5 md:hidden flex justify-end" x-data="{navbarOpen : false}">
        <x-pack.button x-on:click="navbarOpen = true"><i class="fa-solid fa-bars"></i></x-pack.button>

        <div x-cloak
             x-show="navbarOpen"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="translate-x-full"
             x-transition:leave="transition ease-in duration-300"
             x-transition:leave-start="translate-x-0"
             x-transition:leave-end="translate-x-full"
             class="flex flex-col min-h-[90vh] space-y-4 bg-gray-100 text-off-white drop-shadow-2xl rounded-md absolute z-20 p-5 w-60">

            <div class="flex justify-end mb-2">
                <x-pack.button x-on:click="navbarOpen = false" :inverse="true"><i class="fa-solid fa-bars"></i></x-pack.button>
            </div>

            @auth
                <div class="flex items-center">
                    <img src="{{ asset('images/friend-hug.png') }}" alt="Frendnary logo" class="w-[50px] me-2">
                    <a href="{{route('dashboard')}}" class="font-bold text-xl">Frendnary</a>
                </div>
            @else
                <div class="flex items-center">
                    <img src="{{ asset('images/friend-hug.png') }}" alt="Frendnary logo" class="w-[50px] me-2">
                    <a href="{{route('home')}}" class="font-bold text-xl">Frendnary</a>
                </div>
            @endauth

            @if (Route::has('login'))
                <nav class="-mx-3 flex flex-col items-start justify-center">
                    @auth
                        <x-pack.tab :route="route('dashboard')" color="bg-primary">Dashboard</x-pack.tab>
                        <x-pack.button wire:click="logout" color="bg-danger" icon="fa-solid fa-door-open" icon_pos="right">
                            {{ __('Log Out') }}
                        </x-pack.button>
                    @else
                        <x-pack.tab :route="route('login')">Login</x-pack.tab>
                        <x-pack.tab :route="route('register')">Register</x-pack.tab>
                    @endauth
                </nav>
            @endif
        </div>
    </header>
</div>
