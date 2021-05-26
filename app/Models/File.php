<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ['name', 'path'];

    public function companies()
    {
        return $this->belongsTo(Company::class, 'file_id', 'id');
    }

    public function users()
    {
        return $this->hasMany(User::class, 'user_avatar_id', 'id');
    }
}
