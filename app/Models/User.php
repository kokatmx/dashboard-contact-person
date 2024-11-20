<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

<<<<<<< HEAD
=======
    const STORE_AREA = ['O1100', 'O1200', 'O9400'] + ['O0000'];
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
    ] +
        ['C0000', 'F0000', 'G0000', 'H0000', 'K0000', 'M0000', 'R0000', 'YY000'];
    const WAREHOUSE_AREA = ['O1900'] + ['O2222'];
>>>>>>> dev

    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'name',
        'email',
        'password',
<<<<<<< HEAD
=======
        'area_id',
>>>>>>> dev
        'grade_id',
        'department_id',
        'division_id',
        'no_hp',
    ];

<<<<<<< HEAD
    public function canUpdateUsers(User $otherUser)
    {
        return $this->division_id == $otherUser->division_id && $this->grade->max_grade >= $otherUser->grade->max_grade;
    }

=======
    public function canUpdateUsers(User $otherUser): bool
    {
        return $this->area_id == $otherUser->area_id && $this->division_id == $otherUser->division_id && $this->department_id == $otherUser->department_id && $this->grade->max_grade >= $otherUser->grade->max_grade;
    }


    public function area()
    {
        return $this->belongsTo(Area::class, 'area_id');
    }
>>>>>>> dev
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
