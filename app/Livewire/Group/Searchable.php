<?php

namespace App\Livewire\Group;

use Illuminate\Database\Eloquent\Builder;

trait Searchable
{
    public $search;

    public function search(Builder $query): Builder {
        if (empty($this->search)) { return $query; }

        return $query->where('name', 'like', '%' . $this->search . '%');
    }
}
