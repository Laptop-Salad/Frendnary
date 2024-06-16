<?php

namespace App\Livewire\Forms;

use App\Models\Invite;
use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Form;

class InviteForm extends Form
{
    #[Validate(['required', 'exists:users,email'])]
    public $user_email;
    #[Validate(['required', 'exists:users,id'])]
    public $user_id;
    #[Validate(['required', 'exists:groups,id'])]
    public $group_id;

    public function save() {
        $this->validateOnly('user_email');

        $this->user_id = User::where('email', $this->user_email)->first()->id;

        $this->validate();

        Invite::create($this->except('user_email'));
    }
}
