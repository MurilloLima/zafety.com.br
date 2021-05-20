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

    public function meetings()
    {
        return $this->hasMany(Meeting_report::class, 'company_id');
    }
}
