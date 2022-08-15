<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class month_salary extends Model
{
    use HasFactory;

    public $fillable = [
        'month',
'employee_id',
'basic_salary',
'salary_allowance',
'gross_pay',
'epf',
'net_salary',
'add_by'
    ];

}
