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

    const ROLE_STORE = 'store';
    const ROLE_OFFICE = 'office';
    const ROLE_WAREHOUSE = 'warehouse';
    const MIN_GRADE_FOR_UPDATE = 3;

    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'name',
        'email',
        'password',
        // 'role',
        'grade_id',
        'department_id',
        'division_id',
    ];

    // Cek apakah user memiliki akses untuk mengupdate berdasarkan grade
    // Check if user can update another user based on grade level
    public function canUpdateUser(User $otherUser)
    {
        return $this->grade->grade_level > $otherUser->grade->grade_level;
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
