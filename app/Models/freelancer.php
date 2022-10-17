<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class freelancer extends Model
{
    use HasFactory;


    protected $fillable = [
        'freelancer_name',
        'freelancer_email',
        'freelancer_status',
        'freelancer_role',
        'freelancer_contact'
    ];
}
