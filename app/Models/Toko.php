<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    use HasFactory;
    protected $primaryKey = 'toko_id';
    protected $fillable = [
        'toko_code',
        'toko_name',
        'no_hp',
        'position_id',
    ];

    // public function position()
    // {
    //     return $this->belongsTo(Position::class, 'position_id');
    // }

    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id', 'position_id');
    }


    // public function users()
    // {
    //     return $this->hasManyThrough(User::class, Position::class, 'position_id', 'position_id', 'position_id', 'position_id');
    // }


    public function users()
    {
        return $this->hasMany(User::class, 'toko_id', 'toko_id'); // Relasi ke user-user
    }

    public function getAreaManager()
    {
        return $this->users->filter(function ($user) {
            return str_contains($user->position->position_name, 'Area Manager');
        })->first();
    }

    public function getAreaCoordinator()
    {
        return $this->users->filter(function ($user) {
            return str_contains($user->position->position_name, 'Area Coordinator');
        })->first();
    }
}
