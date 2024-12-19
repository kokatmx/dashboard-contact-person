<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $primaryKey = 'grade_id';

    protected $table = 'grades';
    protected $guarded = ['grade_id'];
    public function position()
    {
        return $this->hasOne(Position::class, 'grade_id');
    }
}
