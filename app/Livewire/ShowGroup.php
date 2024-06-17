<?php

namespace App\Livewire;

use App\Livewire\Forms\DefinitionForm;
use App\Livewire\Forms\InviteForm;
use App\Models\Definition;
use App\Models\Group;
use Livewire\Attributes\Locked;
use Livewire\Component;

class ShowGroup extends Component
{
    #[Locked]
    public Group $group;

    public DefinitionForm $definition_form;
    public InviteForm $invite_form;

    public $show_create_def = false;
    public $show_invite_friend = false;

    public function getDefinitionsProperty() {
        return Definition::where('group_id', $this->group->id)->orderByDesc('created_at')->paginate();
    }

    public function saveDefinition() {
        $this->definition_form->created_by = auth()->user()->id;
        $this->definition_form->group_id = $this->group->id;
        $this->definition_form->save();
        $this->show_create_def = false;
        $this->definition_form->reset();
    }

    public function editDefinition(Definition $definition) {
        $this->definition_form->set($definition);
        $this->show_create_def = true;
    }

    public function deleteDefinition(Definition $definition) {
        $definition->delete();
        session()->flash('message', 'Definition deleted successfully.');
    }

    public function saveInvite() {
        $this->invite_form->group_id = $this->group->id;
        $this->invite_form->save();
        $this->show_invite_friend = false;
        $this->invite_form->reset();
    }

    public function showInviteModal() {
        $this->show_invite_friend = true;
    }

    public function showCreateDefModal() {
        $this->show_create_def = true;
    }

    public function render()
    {
        return view('livewire.show-group');
    }
}
