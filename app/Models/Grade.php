<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $primaryKey = 'grade_id';

    protected $table = 'grades';
    protected $fillable = ['min_grade', 'max_grade'];
    public function position()
    {
        return $this->hasOne(Position::class, 'grade_id');
    }
}