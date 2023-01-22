<?php

namespace App\Http\Controllers\Admin\Experience;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\experience_tb;
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
 
        $data=$request->validate([
            'experience_name'=>'required|string',
            'experience_duration'=>'required|string',
            'experience_technology'=>'required|string',
            'experience_description'=>'required|string',
            'experience_link'=>'required|string',
            'experience_image'=>'required|image|file|mimes:jpg,png,jpeg,giv,svg|max:3000',
            'experience_video' => 'required|file|mimetypes:video/mp4',

        ]);

        $saveFile= new experience_tb;
        $saveFile->Institution=$request->Institution;
        $saveFile->experience_name=$request->experience_name;
        $saveFile->experience_duration=$request->experience_duration;
        $saveFile->experience_technology=$request->experience_technology;
        $saveFile->experience_description=$request->experience_description;
        $saveFile->experience_link=$request->experience_link;
    

        if($request->hasFile('experience_image')){
            // $imagePath=$request->file('experience_image')->store('ImagePost',['disk'=>'my_filesImage']);
            $imagePath=$request->file('experience_image');
            $fileName=$imagePath->getClientOriginalName();
            $imagePath->storeAs('ImagePostExperience',$fileName);
            $saveFile->experience_image=$fileName;
            // $data['experience_image']=$request->file('experience_image')->store('post-images');
        }

        if($request->hasFile('experience_video')){
            // $videoPath=$request->file('experience_video')->store('videoPost',['disk'=>'my_files']);
            $videoPath=$request->file('experience_video');
            $fileName=$videoPath->getClientOriginalName();
            $imagePath->storeAs('VideoPostExperience',$fileName); 
            $saveFile->experience_video=$fileName;
            
        }
        $saveFile->save();

        return redirect()->to('experience')->with('success','New data experience has been added')  ; 
        // return response()->json([
        //     'success' => true,
        //     'message' => 'Data Berhasil Disimpan!',
        //     'data'    => $data  
        // ]);
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
