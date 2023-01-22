<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class education_tb extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'education_name',
        'education_major',
        'education_duration',
        'education_grade',
        'education_description',
        'education_image',
        'updated_at',
        'created_at',
 
    ];

    public function user_access_tb()
    {
        return $this->hasOne(user_access_tb::class);
    }
}
