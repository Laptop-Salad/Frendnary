<?php

namespace App\Livewire;

use App\Models\GroupUser;
use App\Models\Invite;
use Illuminate\Validation\Rules\In;
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

    public function acceptInvite(Invite $invite) {
        $group = $invite->group;

        $already_invited = GroupUser::where('user_id', auth()->user()->id)
            ->where('group_id', $group->id)->first();

        if (isset($already_invited)) {
            $invite->delete();
            return;
        }

        GroupUser::create([
            'user_id' => auth()->user()->id,
            "group_id" => $group->id,
        ]);

        $invite->delete();
    }

    public function render()
    {
        return view('livewire.dashboard', [
            'greeting' => $this->generateGreeting()
        ]);
    }
}
