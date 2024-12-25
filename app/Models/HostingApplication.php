<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HostingApplication extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'number_of_cats',
        'email',
        'breed',
        'additional_info',
        'start_date',
        'end_date'
    ];
}
