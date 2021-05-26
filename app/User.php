<?php

namespace App;

use App\Models\File;
use App\Models\Meeting_report;
use App\Models\Role_user;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function meetings()
    {
        return $this->hasMany(Meeting_report::class, 'owner_id');
    }

    public function roles()
    {
        return $this->hasMany(Role_user::class, 'user_id', 'id');
    }

    public function file()
    {
        return $this->belongsTo(File::class, 'id');
    }

    public function getAuthPassword()
    {
        return $this->password_hash;
    }
}
