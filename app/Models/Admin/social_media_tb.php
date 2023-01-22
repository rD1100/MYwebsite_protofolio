<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class social_media_tb extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'social_media_name',
        'social_media_account_link',
        'social_media_image',
        'updated_at',
        'created_at',
 
    ];

    public function user_access_tb()
    {
        return $this->hasOne(user_access_tb::class);
    }
}
