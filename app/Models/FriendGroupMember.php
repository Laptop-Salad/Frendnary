<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FriendGroupMember extends Model
{
    use HasFactory;

    protected $table = "friend_group_member";
    protected $primaryKey = "id";
    protected $fillable = ["user_id", "friend_group_id"];
    public $incrementing = true;
    public $timestamps = false; // no updated_at and created_at column
}
