<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    use HasFactory;
    public $fillable = [
        'role_name',
        'created_at',
        'updated_at',
        'active'
    ];
}
