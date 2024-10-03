<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $table = 'areas';
    protected $primaryKey = 'area_id';
    protected $fillable = [
        'name',
    ];

    public function departments()
    {
        $this->belongsTo(Department::class, 'department_id', 'department_id');
    }
}
