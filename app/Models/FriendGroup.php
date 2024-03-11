<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FriendGroup extends Model
{
    use HasFactory;

    protected $table = "friend_group";
    protected $primaryKey = "id";
    protected $fillable = ["name"];
    public $incrementing = true;
    public $timestamps = false; // no updated_at and created_at column
}
