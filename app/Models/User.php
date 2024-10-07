<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    const DIV_WAREHOUSE = 'O2222';
    const DEPT_WAREHOUSE = 'O1900';
    const DIV_STORE = 'O0000';
    const DEPT_STORE = ['O1100', 'O1200', 'O9400'];
    const DIV_OFFICE = ['C0000', 'F0000', 'G0000', 'H0000', 'K0000', 'M0000', 'R0000', 'YY000'];
    const DEPT_OFFICE = ['C3100', 'F1500', 'F5100', 'G1600', 'H1800', 'H2600', 'K1300', 'M3200', 'R4300', 'R5800', 'YY002', 'YY004'];

    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'name',
        'email',
        'password',
        'grade_id',
        'department_id',
        'division_id',
    ];

    // Cek apakah user memiliki akses untuk mengupdate berdasarkan grade
    // Check if user can update another user based on grade level
    public function canUpdateUsers(User $otherUser)
    {
        return $this->grade->max_grade > $otherUser->grade->max_grade;
    }
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function division()
    {
        return $this->belongsTo(Division::class, 'division_id');
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class, 'grade_id');
    }

    // public function area()
    // {
    //     return $this->belongsTo(Area::class, 'area_id');
    // }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
