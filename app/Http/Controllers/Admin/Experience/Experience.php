<?php

namespace App\Http\Controllers\Admin\Experience;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\experience_tb;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Support\Facades\DB;
// use App\Video;
// use Storage;

class Experience extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=experience_tb::get();
        // dd( $data);
        return view('admin.experience')->with('data',$data);

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
 
        $data=Validator::make($request->all(), [
            'experience_name'=>'required|string',
            'experience_duration'=>'required|string',
            'experience_technology'=>'required|string',
            'experience_description'=>'required|string',
            'experience_link'=>'required|string',
            'experience_image'=>'required|image|file|mimes:jpg,png,jpeg,giv,svg|max:3000',
            'experience_video' => 'required|file|mimetypes:video/mp4',

        ]);

        if($data->fails()){
            return response()->json($data->errors(), 422);
        }

        $saveFile= new experience_tb;
        $saveFile->Institution=$request->Institution;
        $saveFile->experience_name=$request->experience_name;
        $saveFile->experience_duration=$request->experience_duration;
        $saveFile->experience_technology=$request->experience_technology;
        $saveFile->experience_description=$request->experience_description;
        $saveFile->experience_link=$request->experience_link;
    
        // dd($request->experience_image);
        if($request->hasFile('experience_image')){
            $imagePath=$request->file('experience_image')->store('ImagePostExperience',['disk'=>'my_filesImageExperience']);
            $saveFile->experience_image=$imagePath;
        }

        if($request->hasFile('experience_video')){
            $videoPath=$request->file('experience_video')->store('videoPost',['disk'=>'my_filesVideo']);
            $saveFile->experience_video=$videoPath; 
        }
        $saveFile->save();

        return response()->json([
            'success' => true,
            'message' => 'Experience data has been added',
            'data'    => $saveFile  
        ]);
    }

   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = experience_tb::where('id',$id)->first();
      
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Post cok',
            'data'    => $data  
        ]);
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
        $data=Validator::make($request->all(), [

            'Institution'=>'required|string',
            'experience_name'=>'required|string',
            'experience_duration'=>'required|string',
            'experience_technology'=>'required|string',
            'experience_description'=>'required|string',
            'experience_link'=>'required|string',
            'experience_image'=>'image|file|mimes:jpg,png,jpeg,giv,svg|max:3000',
            'experience_video' => 'file|mimetypes:video/mp4',

        ]);

        if($data->fails()){
            return response()->json($data->errors(), 422);
        }

        $data=experience_tb::find($id);
        $data->Institution=$request->Institution;
        $data->experience_name=$request->experience_name;
        $data->experience_duration=$request->experience_duration;
        $data->experience_technology=$request->experience_technology;
        $data->experience_description=$request->experience_description;
        $data->experience_link=$request->experience_link;
        // $data->experience_image=$request->experience_image;
        // $data->experience_video=$request->experience_video;

        if($request->hasFile('experience_image')){
            $imagePath=$request->file('experience_image')->store('ImagePostExperienceUpdate',['disk'=>'my_filesImageExperienceUpdate']);
            $data->experience_image=$imagePath;
        }

        if($request->hasFile('experience_video')){
            $videoPath=$request->file('experience_video')->store('videoPostUpdate',['disk'=>'my_filesVideoUpdate']);
            $data->experience_video=$videoPath; 
        }

        $data->save();

        return response()->json([
            'success'=>true,
            'message'=>'Experience data has been update',
            'data'=>$data,
        ]);
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
