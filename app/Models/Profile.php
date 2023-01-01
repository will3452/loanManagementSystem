<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'id_1',
        'id_2',
        'salary',
        'educ_level',
        'current_address',
        'permanent_address',
        'mothers_name',
        'fathers_name',
        'birthday',
    ];
    
}
