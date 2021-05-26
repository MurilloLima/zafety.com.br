<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role_user extends Model
{
    public function rule()
    {
        return $this->belongsTo(Role::class, 'id', 'role_id');
    }
}
