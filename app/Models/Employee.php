<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EmployeePensiun;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';

    public function employee_pensiun()
    {
        return $this->hasMany(EmployeePensiun::class,'employee_id','id');
    }
}
