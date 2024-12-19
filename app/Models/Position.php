<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    // protected $table = 'positions';
    protected $primaryKey = 'position_id';
    protected $fillable = [
        'position_name',
        'position_code',
        'department_id',
        'grade_id',
    ];

    public function grade()
    {
        return $this->belongsTo(Grade::class, 'grade_id');
    }
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'department_id');
    }

    public function users()
    {
        return $this->hasMany(User::class, 'position_id');
    }

    // public function subPositions()
    // {
    //     return $this->hasMany(Position::class, 'parent_position_id'); // Relasi ke jabatan di bawahnya
    // }

    // public function stores()
    // {
    //     return $this->belongsToMany(Toko::class, 'position_toko', 'position_id', 'toko_id');
    // }
}
