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
        'area_id',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'department_id');
    }
    public function division()
    {
        return $this->belongsTo(Division::class, 'division_id');
    }

    public function positions()
    {
        return $this->hasMany(Position::class, 'department_id', 'department_id');
    }
    public function area()
    {
        return $this->belongsTo(Area::class, 'area_id');
    }

    // public function tokos()
    // {
    //     return $this->hasManyThrough(Toko::class, Position::class, 'department_id', 'position_id', 'department_id', 'position_id');
    // }

    public function stores()
    {
        // return $this->hasManyThrough(Toko::class, Position::class, 'department_id', 'position_id');
        // return $this->hasManyThrough(
        //     Toko::class,
        //     Position::class,
        //     'department_id', // Foreign key di tabel `positions` yang merujuk ke `departments`
        //     'position_id',   // Foreign key di tabel `tokos` yang merujuk ke `positions`
        //     'department_id', // Primary key di tabel `departments`
        //     'position_id'    // Primary key di tabel `positions`
        // );

        return Toko::whereHas('position', function ($query) {
            $query->where('department_id', $this->department_id);
        })->get();
    }


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
