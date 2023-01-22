<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class experience_tb extends Model
{
    use HasFactory;

    protected $fillable=[
        'id ',
        'experience_name',
        'experience_duration',
        'experience_technology',
        'experience_description',
        'experience_link',
        'experience_image',
        'updated_at',
        'created_at',
    ];

    public function user_access_tb()
    {
        return $this->hasOne(user_access_tb::class);
    }
}
