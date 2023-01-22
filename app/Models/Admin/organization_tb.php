<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class organization_tb extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'organization_name',
        'institution',
        'duration',
        'description',
        'image',
  
        'updated_at',
        'created_at',
 
    ];

    public function user_access_tb()
    {
        return $this->hasOne(user_access_tb::class);
    }
}
