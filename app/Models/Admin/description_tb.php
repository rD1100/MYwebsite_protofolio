<?php

namespace App\Models\Admin;

use App\Models\User\user_tb;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class description_tb extends Model
{
    use HasFactory;
    public $timestamps= false;

    protected $fillable=[
        'id',
        'user_description',
        'education_description',
        'experience_desription',
        'skill_description',
        'updated_at',
        'created_at',
 
    ];

    public function user_tb()
    {
        return $this->hasOne(user_tb::class);
    }
}
