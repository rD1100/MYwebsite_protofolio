<?php

namespace App\Http\Controllers\Admin\Skills;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\skill_tb;

class Skills extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=skill_tb::get();
        // dump($data);
        return view('admin.skills')->with("data",$data);
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
        $data=[
            "skill_name"=>$request->skill_name,
            "skill_duration"=>$request->skill_duration,
            "skill_description"=>$request->skill_description,
            "skill_image"=>$request->skill_image,
            

        ];

        // dd($data);

        skill_tb::create($data);
        return redirect()->to('skills')->with('success', 'Skill data has been added');
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
