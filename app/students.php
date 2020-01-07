<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    protected $primaryKey = 'URN';
    protected $fillable = [
        "URN",
        'CRN',
        'name',
        'whatsapp_cont',
        'dob',
        'branch_type',
        'gender',
        'mail_id',
        'phone_number',
        'tenth_percentage',
        'percentage_twelve',
        'percentage_Diploma',
        'year_gap',
        'sgpa_aggregate',
        'percentage_aggregate',
        'credits_aggregate',
        'active_backlog_aggregate',
        'passive_backlog_aggregate'
    ];
    public $timestamps = false;
}
