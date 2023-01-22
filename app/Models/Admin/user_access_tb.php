<?php

namespace App\Models\Admin;

use App\Models\User\user_tb;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class user_access_tb extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'user_id',
        'social_media_id',
        'experience_id',
        'education_id',
        'skill_ids',
        'updated_at',
        'created_at',
    
    ];

    public function user_tb(){
        return  $this->belongsTo(user_tb::class,'user_id');
    }

    public function education_tb()
    {
        return $this->belongsTo(education_tb::class,"education_id");
    }

    public function experience_tb()
    {
       return $this->belongsTo(experience_tb::class,'experience_id');
    }

    public function skill_tb()
    {
        return $this->belongsTo(skill_tb::class,'skill_ids');
    }

    public function social_media_tb()
    {
        return $this->belongsTo(social_media_tb::class,'social_media_id');
    }

    public function organization_tb()
    {
        return $this->belongsTo(organization_tb::class,'organization_id');
    }

    public function allData()
    {
   
       return DB::table('user_access_tbs')
       ->leftJoin('user_tbs', 'user_tbs.id', '=', 'user_access_tbs.user_id')
       ->leftJoin('social_media_tbs','social_media_tbs.id', '=', 'user_access_tbs.social_media_id')
       ->leftJoin('experience_tbs', 'experience_tbs.id', '=', 'user_access_tbs.experience_id')
       ->leftJoin('education_tbs', 'education_tbs.id', '=', 'user_access_tbs.skill_ids')
       ->leftJoin('skill_tbs', 'skill_tbs.id', '=', 'user_access_tbs.skill_ids')
       
       ->get();
    }

    public function oneUser()
    {
   
       return DB::table('user_access_tbs')
       ->leftJoin('user_tbs', 'user_tbs.id', '=', 'user_access_tbs.user_id')
       ->leftJoin('social_media_tbs','social_media_tbs.id', '=', 'user_access_tbs.social_media_id')
       ->leftJoin('experience_tbs', 'experience_tbs.id', '=', 'user_access_tbs.experience_id')
       ->leftJoin('education_tbs', 'education_tbs.id', '=', 'user_access_tbs.skill_ids')
       ->leftJoin('skill_tbs', 'skill_tbs.id', '=', 'user_access_tbs.skill_ids')
       ->where("user_access_tbs.id",'=','3')
       ->get();
    }


}
