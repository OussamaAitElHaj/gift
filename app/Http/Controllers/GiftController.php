<?php

namespace App\Http\Controllers;

use App\Gift;
use Illuminate\Http\Request;
use DB;

class GiftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/admin/gift/gift');
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
        $gifts = new Gift();

        $gifts->name = $request->input('name');
        $gifts->color = $request->input('color');
        $gifts->fornisseur_id = $request->input('fornisseur_id');

        if($request->hasFile('image')){

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/gift/',$filename);
            $gifts->image = $filename;

        }
        else{
            return $request;
            $gifts->image='';
        }

        $gifts->save();

        return redirect("/gifttable");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $gifts=DB::table('gifts')->paginate(4);
        //var_dump($gifts);exit;
        return view("admin.gift.gifttable",["gifts"=>$gifts]) ;
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
        DB::table('gifts')->where('id',$id)->delete();
        return redirect('/gifttable'); 
    }
}
