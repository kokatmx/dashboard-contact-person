<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Area extends Model
{
    use HasFactory;
    protected $table = 'areas';
    protected $primaryKey = 'area_id';
    protected $fillable = [
        "area_code",
        "area_name",
    ];

    const STORE_AREA = ['O1100', 'O1200', 'O9400', 'O0000'];
    const OFFICE_AREA = [
        'C3100',
        'F1500',
        'F5100',
        'G1600',
        'H1800',
        'H2600',
        'K1300',
        'M3200',
        'R4300',
        'R5800',
        'YY002',
        'YY004',
        'C0000',
        'F0000',
        'G0000',
        'H0000',
        'K0000',
        'M0000',
        'R0000',
        'YY000',
    ];
    const WAREHOUSE_AREA = ['O1900', 'O2222'];

    public function divisions()
    {
        return $this->hasMany(Division::class, 'area_id');
    }

    public function departments()
    {
        return $this->hasMany(Department::class, 'area_id');
    }


    public function users()
    {
        return $this->hasMany(User::class, 'area_id');
    }

    function generateSlug($areaCode)
    {
        return Str::of($areaCode)->slug('-');
    }
}
