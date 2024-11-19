<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $table = 'grades';

    protected $primaryKey = 'grade_id';

    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id');
    }

    public function users()
    {
        return $this->hasMany(User::class, 'grade_id');
    }
}
