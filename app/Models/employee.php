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


    /**
     * Get all of the comments for the employee
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salary()
    {
        return $this->hasMany(month_salary::class, 'employee_id');
    }

    /**
     * Get the user that owns the employee
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'foreign_key', 'other_key');
    }
}
