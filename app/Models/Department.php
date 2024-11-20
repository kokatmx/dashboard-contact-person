<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Department extends Model
{
    use HasFactory;

    protected $table = 'departments';

    protected $primaryKey = 'department_id';
    protected $fillable = [
        'code_department',
        'name_department',
        'description',
        'division_id',
<<<<<<< HEAD
=======
        'area_id',
>>>>>>> dev
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'department_id');
    }
    public function division()
    {
        return $this->belongsTo(Division::class, 'division_id');
    }

<<<<<<< HEAD
    // for slug
    // protected static function boot()
    // {
    //     parent::boot();

    //     static::creating(function ($department) {
    //         $department->slug = Str::slug($department->name . '-' . Str::random(5), '-');
    //     });
    // }


    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }
=======
    public function positions()
    {
        return $this->hasMany(Position::class, 'department_id');
    }
    public function area()
    {
        return $this->belongsTo(Area::class, 'area_id', 'id');
    }
>>>>>>> dev

    // using UUID
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->uuid)) {
                $model->uuid = (string) Str::uuid();
            }
        });
    }
}
