<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public function generateGreeting() {
        $greetings = [
            "Hello,",
            "Howdy!",
            "Good to see you",
            "How are you going?",
            "Yo",
            "Long time no see",
            "Good day",
            "How are you?",
            "Heya",
            "What's new?",
            "It's good to see you",
            "G'day!",
            "What's up?",
            "How's it going?"
        ];

        return $greetings[array_rand($greetings, 1)];
    }

    public function render()
    {
        return view('livewire.dashboard', [
            'greeting' => $this->generateGreeting()
        ]);
    }
}
