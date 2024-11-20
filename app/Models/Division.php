<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;
    protected $table = 'divisions';
    protected $primaryKey = 'division_id';
<<<<<<< HEAD
=======
    protected $fillable = ['division_name', 'division_code', 'area_id'];

    
>>>>>>> dev

    public function departments()
    {
        return $this->hasMany(Department::class, 'division_id');
    }
    public function positions()
    {
        return $this->hasMany(Position::class, 'division_id');
    }

    public function users()
    {
        return $this->hasMany(User::class, 'division_id');
    }
<<<<<<< HEAD
=======

    public function area()
    {
        return $this->belongsTo(Area::class, 'area_id');
    }
>>>>>>> dev
}
