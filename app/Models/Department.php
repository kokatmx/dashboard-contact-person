<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $table = 'departments';

    protected $primaryKey = 'department_id';
    protected $fillable = [
        'code_department',
        'name_department',
        'description',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'department_id');
    }

    // public function areas()
    // {
    //     return $this->hasMany(Area::class, 'department_id');
    // }

    public function divisions()
    {
        return $this->belongsToMany(Division::class, 'department_division', 'department_id', 'division_id');
    }
}
