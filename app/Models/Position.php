<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;
    protected $primaryKey = 'position_id';

    protected $fillable = [
        'position_name',
        'position_code',
        'department_id',
    ];

    public function grades()
    {
        return $this->hasMany(Grade::class, 'position_id');
    }
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }
}
