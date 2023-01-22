<?php

namespace App\Http\Controllers\Admin\UserAccess;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\user_access_tb;
use App\Models\Admin\education_tb;
use App\Models\Admin\experience_tb;
use App\Models\Admin\skill_tb;
use App\Models\Admin\social_media_tb;
use App\Models\Admin\organization_tb;
use App\Models\User\user_tb;



class UserAccessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $user_access_tb;

    public function __construct(user_access_tb $user_access_tb)
    {
        $this->user_access_tb = $user_access_tb;
    }
    public function index()
    {
     $data=user_access_tb::get();
     $userData=user_tb::get();
     $educationData=education_tb::get();
     $experienceData=experience_tb::get();
     $skillData=skill_tb::get();
     $socialMediaData=social_media_tb::get();
     $organizationData=organization_tb::get();
        return view('admin.userAccess')
        ->with("data",$data)->with("userData",$userData)
        ->with("eduData",$educationData)->with("experienceData",$experienceData)
        ->with("skillData",$skillData)->with("socialMediaData",$socialMediaData)
        ->with("organizationData",$organizationData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        $data=[
            "user_id"=>$request->user_id,
            "social_media_id"=>$request->social_media_id,
            "education_id"=>$request->education_id,
            "skill_ids"=>$request->skill_ids,
            "experience_id"=>$request->experience_id,
            // "updated_at"=>$request->updated_at,
            // "created_at"=>$request->created_at,

        ];

        dump($data);

        user_access_tb::create($data);
        return redirect()->to('useraccess')->with('success', 'User access data has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
