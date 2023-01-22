<?php

namespace App\Http\Controllers\Admin\Organization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\organization_tb;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=organization_tb::get();
        return view('admin.organization')->with('data',$data);
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
            'organization_name'=>'required|string',
            'institution'=>'required|string',
            'duration'=>'required|string',
            'description'=>'required|string',
            'image'=>'required|image|file|mimes:jpg,png,jpeg,giv,svg|max:3000',
            
            

        ]);

        // images
   
        $saveFile= new organization_tb;
        $saveFile->organization_name=$request->organization_name;
        $saveFile->institution=$request->institution;
        $saveFile->duration=$request->duration;
        $saveFile->description=$request->description;
       

        if($request->hasFile('image')){
            // $imagePath=$request->file('education_image')->store('ImagePostEdu',['disk'=>'my_fileImageEdu']);
            $imagePath=$request->file('image');
            $fileName=$imagePath->getClientOriginalName();
            $imagePath->storeAs('ImagePostOrganization',$fileName);
            $saveFile->image=$fileName;
          
           
        }

        $saveFile->save();

        return redirect()->to('organizations')->with('success','New data Organization has been added')  ; 
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
