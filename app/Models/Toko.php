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
        'position_id',
    ];

    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id');
    }
}
