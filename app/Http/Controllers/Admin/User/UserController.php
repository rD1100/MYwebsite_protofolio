<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\user_tb;
use Illuminate\Support\Facades\Validator;
use DB;

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
        // dd($data);
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
        $data=Validator::make($request->all(), [
            'name'=>'required|string',
            'email'=>'required|string',
            'phone_number'=>'required|string',
            'user_description'=>'required|string',
            'address'=>'required|string',
            'path_image'=>'image|file|mimes:jpg,png,jpeg,giv,svg|max:3000',
            

        ]);

        if($data->fails()){
            return response()->json($data->errors(), 422);
        }

        $saveFile= new user_tb;
        $saveFile->name=$request->name;
        $saveFile->email=$request->email;
        $saveFile->phone_number=$request->phone_number;
        $saveFile->user_description=$request->user_description;
        $saveFile->address=$request->address;
    
        // dd($request->path_image);
        if($request->hasFile('path_image')){

            $imagePath=$request->file('path_image')->store('ImagePostUser',['disk'=>'my_fileImageUser']);    
            $saveFile->path_image=$imagePath;

        }
 
        $saveFile->save();

        return response()->json([
            'success' => true,
            'message' => 'User data has been added',
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
        $data = user_tb::where('id',$id)->first();
      
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
     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
    //    dd($request);
        
        $validator = Validator::make($request->all(), [
            'name'=>'required|string',
            'email'=>'required|string',
            'phone_number'=>'required|string',
            'user_description'=>'required|string',
            'address'=>'required|string',
            'user_image'=>'image|file|mimes:jpg,png,jpeg,giv,svg|max:3000',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // $imagePath=$request->file('path_image')->store('ImagePostUserUpdate',['disk'=>'my_fileImageUserUpdate']);
        $user_tb=user_tb::find($id);
    
        $user_tb->name=$request->name;
        $user_tb->email=$request->email;
        $user_tb->phone_number=$request->phone_number;
        $user_tb->user_description=$request->user_description;
        $user_tb->address=$request->address;

        if($request->hasFile('path_image')){

            $imagePath=$request->file('path_image')->store('ImagePostUserUpdate',['disk'=>'my_fileImageUserUpdate']);  
            $user_tb->path_image=$imagePath;


        }
        $user_tb->save();


        return response()->json([
            'success'=>true,
            'message'=>'User data has been update',
            'data'=>$user_tb,
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
        // dd('delete');
        $dataDeleted=user_tb::find($id)->delete();
       
        return response()->json([
            'success'=>true,
            'message'=>'User data has been delete!',
            'data'=>$dataDeleted,
           
        ]);
    }
}
