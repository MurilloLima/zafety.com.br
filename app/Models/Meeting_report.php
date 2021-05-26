<?php

namespace App\Models;

use App\User;
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
        'company_id'
    ];

    public function company()
    {
        return $this->hasOne(Company::class, 'id', 'company_id');
    }

    public function area()
    {
        return $this->belongsTo(Area::class, 'area_id', 'id');
    }

    public function setor()
    {
        return $this->belongsTo(Sector::class, 'sector_id', 'id');
    }

    public function participantes()
    {
        return $this->hasMany(Meeting_report_extenal_participant::class, 'meeting_report_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'owner_id', 'id');
    }
}
