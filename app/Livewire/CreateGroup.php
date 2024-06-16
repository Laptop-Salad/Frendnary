<?php

namespace App\Livewire;

use App\Models\Group;
use App\Models\GroupUser;
use Livewire\Component;

class CreateGroup extends Component
{
    public $name;
    public $error;

    public function save() {
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

    public function render()
    {
        return view('livewire.create-group');
    }
}
