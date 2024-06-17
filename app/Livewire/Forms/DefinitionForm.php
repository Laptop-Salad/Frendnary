<?php

namespace App\Livewire\Forms;

use App\Models\Definition;
use Livewire\Attributes\Validate;
use Livewire\Form;

class DefinitionForm extends Form
{
    public $id;
    #[Validate(['required', 'exists:groups,id'])]
    public $group_id;
    #[Validate(['required', 'exists:users,id'])]
    public $created_by;
    #[Validate(['required', 'in:1,2'])]
    public $type = 1;
    #[Validate(['required', 'string'])]
    public $name = "Name";
    #[Validate(['required', 'string'])]
    public $definition = "Definition";

    public function set(Definition $definition) {
        $this->id = $definition->id;
        $this->group_id = $definition->group_id;
        $this->created_by = $definition->created_by;
        $this->type = $definition->type;
        $this->name = $definition->name;
        $this->definition = $definition->definition;
    }

    public function save() {
        $this->validate();

        $definition = Definition::firstOrNew(['id' => $this->id]);

        $definition->fill($this->except(['id']));
        $definition->save();
    }
}
