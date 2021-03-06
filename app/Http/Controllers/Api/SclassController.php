<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;


class SclassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sclass = DB::table('sclasses')->get();
        return response()->json($sclass);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate data
        $validateData = $request->validate([
            'class_name' => 'required|unique:sclasses|max:25'
        ]);
         
        $data = array();
        $data['class_name'] = $request->class_name;
        
        // insert record
        $insert = DB::table('sclasses')->insert($data);
        
        return response('Inserted Successfully.');
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
        $show = DB::table('sclasses')->where('id', $id)->first();
        return response()->json($show);
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
        $data = array();
        $data['class_name'] = $request->class_name;

        $update = DB::table('sclasses')->where('id', $id)->update($data);
        return response('Record Updated Successfully');
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
        DB::table('sclasses')->where('id', $id)->delete();
        return response('Successfully Deleted');
    }
     

    public function abc() {
        return response('chester');
    }

}
