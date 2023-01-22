<?php

namespace App\Models\User;

use App\Models\Admin\description_tb;
use App\Models\Admin\user_access_tb;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class user_tb extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'description',
        'address',
        'user_image',
        'created_at',
        'updated_at',
      
    ];

    public function user_access_tb()
    {
        return $this->hasMany(user_access_tb::class);
    }

    public function description_tb()
    {
        return $this->belongsTo(description_tb::class,"user_description");
    }
}
