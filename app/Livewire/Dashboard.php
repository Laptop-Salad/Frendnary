<?php

namespace App\Livewire;

use App\Models\Group;
use App\Models\GroupUser;
use App\Models\Invite;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Dashboard extends Component
{
    #[Validate(['required', 'string'])]
    public $name;

    public $error;
    public $show_create_group = false;

    public function save() {
        $this->validateOnly('name');

        if (Group::where('name', $this->name)->first()) {
            $this->error = "Group with that name already exists";
            return;
        }

        $slug = strtolower(str_replace(' ', '-', $this->name));

        $group = Group::create([
            'name' => $this->name,
            'slug' => $slug
        ]);

        GroupUser::create([
            'user_id' => auth()->user()->id,
            'group_id' => $group->id
        ]);

        $this->name = null;
        $this->redirect("/dashboard");
    }

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

    public function toggleCreateGroup() {
        $this->show_create_group = !$this->show_create_group;
    }

    public function render()
    {
        return view('livewire.dashboard', [
            'greeting' => $this->generateGreeting()
        ]);
    }
}
