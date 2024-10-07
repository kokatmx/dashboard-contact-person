<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;
    protected $primaryKey = 'position_id';

    public function grades()
    {
        return $this->hasMany(Grade::class, 'position_id');
    }
}
