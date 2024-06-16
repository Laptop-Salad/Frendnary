<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Group extends Model
{
    use HasUuids;

    protected $guarded = ['id'];

    public function users() : BelongsToMany {
        return $this->belongsToMany(User::class);
    }

    public function definitions(): HasMany {
        return $this->hasMany(Definition::class);
    }

    public function getRouteKeyName() {
        return 'slug';
    }
}
