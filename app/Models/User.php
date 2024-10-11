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


    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'name',
        'email',
        'password',
        'grade_id',
        'department_id',
        'division_id',
        'no_hp',
    ];

    public function canUpdateUsers(User $otherUser)
    {
        return $this->division_id == $otherUser->division_id && $this->grade->max_grade >= $otherUser->grade->max_grade;
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
