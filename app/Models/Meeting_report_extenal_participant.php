<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meeting_report_extenal_participant extends Model
{
    protected $fillable = [
        'external_participant_id',
        'meeting_report_id'
    ];
}
