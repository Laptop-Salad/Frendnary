<?php

namespace App\Livewire\Forms;

use App\Models\Definition;
use Livewire\Attributes\Validate;
use Livewire\Form;

class DefinitionForm extends Form
{
    #[Validate(['required', 'exists:groups,id'])]
    public $group_id;
    #[Validate(['required', 'exists:users,id'])]
    public $created_by;
    #[Validate(['required', 'in:1,2'])]
    public $type;
    #[Validate(['required', 'string'])]
    public $name;
    #[Validate(['required', 'string'])]
    public $definition;

    public function save() {
        $this->validate();

        Definition::create($this->all());
    }
}
