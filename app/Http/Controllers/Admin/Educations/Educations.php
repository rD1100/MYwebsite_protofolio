<?php

namespace App\Http\Controllers\Admin\Educations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\education_tb;

class Educations extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=education_tb::get();
        // dd($data);

        return view('admin.education')->with('data',$data);
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
            'education_name'=>'required|string',
            'education_major'=>'required|string',
            'education_duration'=>'required|string',
            'education_grade'=>'required|string',
            'education_description'=>'required|string',
            'education_image'=>'required|image|file|mimes:jpg,png,jpeg,giv,svg|max:3000',
            

        ]);

        // images
   
        $saveFile= new education_tb;
        $saveFile->education_name=$request->education_name;
        $saveFile->education_major=$request->education_major;
        $saveFile->education_duration=$request->education_duration;
        $saveFile->education_grade=$request->education_grade;
        $saveFile->education_description=$request->education_description;

        if($request->hasFile('education_image')){
            // $imagePath=$request->file('education_image')->store('ImagePostEdu',['disk'=>'my_fileImageEdu']);
            $imagePath=$request->file('education_image');
            $fileName=$imagePath->getClientOriginalName();
            $imagePath->storeAs('ImagePostEdu',$fileName);
            $saveFile->education_image=$fileName;
          
           
        }

        $saveFile->save();

        return redirect()->to('educations')->with('success','New data Education has been added')  ; 
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
