<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\user_tb;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=user_tb::get();
        return view('admin.user')->with('data',$data);
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
        $data=$request->validate([
            'name'=>'required|string',
            'email'=>'required|string',
            'phone_number'=>'required|string',
            'user_description'=>'required|string',
            'address'=>'required|string',
            'user_image'=>'required|image|file|mimes:jpg,png,jpeg,giv,svg|max:3000',
            

        ]);

        $dataDescription=[
            'user_description'=>$request->user_description
        ];

        // dd($data);
        $saveFile= new user_tb;
        $saveFile->name=$request->name;
        $saveFile->email=$request->email;
        $saveFile->phone_number=$request->phone_number;
        $saveFile->user_description=$request->user_description;
        $saveFile->address=$request->address;
    

        if($request->hasFile('user_image')){
         
            $imagePath=$request->file('user_image');
            $fileName=$imagePath->getClientOriginalName();
            
            $imagePath->storeAs('ImagePostUser',$fileName);
            $saveFile->user_image=$fileName;
            
        }

        $saveFile->save();
   

        return redirect()->to('user')->with('success','New data User has been added')  ; 
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
