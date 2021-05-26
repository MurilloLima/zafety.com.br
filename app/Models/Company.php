<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name',
        'cnpj',
        'file_id'
    ];

    public function areas()
    {
        return $this->hasMany(Area::class, 'company_id', 'id');
    }

    public function setores()
    {
        return $this->hasMany(Sector::class, 'company_id', 'id');
    }

    public function reunioes()
    {
        return $this->hasMany(Meeting_report::class, 'company_id', 'id');
    }

    public function themas()
    {
        return $this->hasMany(Theme::class, 'company_id', 'id');
    }

    public function roles()
    {
        return $this->hasMany(Company::class, 'company_id', 'id');
    }

    public function file()
    {
        return $this->hasOne(Company::class, 'file_id');
    }
}
