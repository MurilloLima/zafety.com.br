<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meeting_report extends Model
{
    protected $fillable = [
        'code',
        'subject',
        'date_time',
        'owner_id',
        'theme_id',
        'area_id',
        'sector_id',
    ];
    
    public function company()
    {
        return $this->hasOne(Company::class);
    }
}
