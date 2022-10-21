<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendingClient extends Model
{
    use HasFactory;
    protected $table = 'pendingclients';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'project',
    ];
}
