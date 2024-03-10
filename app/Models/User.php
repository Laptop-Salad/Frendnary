<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class user extends Authenticatable
{
    use HasFactory;

    protected $table = "user";
    protected $primaryKey = "id";
    protected $fillable = ["username", "password"];
    public $incrementing = true;
    public $timestamps = false; // no updated_at and created_at column
}
