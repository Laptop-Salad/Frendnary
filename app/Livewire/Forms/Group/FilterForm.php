<?php

namespace App\Livewire\Forms\Group;

use Illuminate\Database\Eloquent\Builder;
use Livewire\Form;

class FilterForm extends Form
{
    public $definition = false;
    public $lore = false;

    public function apply(Builder $builder): Builder {
        $builder = $this->applyDefinition($builder);
        $builder = $this->applyLore($builder);

        return $builder;
    }

    public function applyLore(Builder $builder)
    {
        if (!$this->lore) { return $builder; }

        return $builder->where('type', 2);
    }

    public function applyDefinition(Builder $builder)
    {
        if (!$this->definition) { return $builder; }

        return $builder->where('type', 1);
    }
}
