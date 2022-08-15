<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;

    public $fillable = [
        'first_name',
'last_name',
'nic',
'phone',
'address',
'employee_number',
'user_id',
'epf_number'
    ];
}
