<?php

namespace App\Models\Skill;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skill_tb extends Model
{
    use HasFactory;

    protected $fillable = [
        'skill_name',
        'skill_duration',
        'skill_description',
        'skill_image',
        'added_at',
       
    ];
}
