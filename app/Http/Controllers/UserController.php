<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\User;
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
        $users=DB::table('users')->paginate(4);
        //$users = DB::table('user')->get();
        return view("admin.users",["users"=>$users]) ;
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
        //
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
    public function update(Request $request,$id)
    {
        $user=User::findOrfail($id);
        $user->name=$request->username;
        $user->save();
        return redirect("/user");
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function  edit($id) 
    {
        $user = User::find($id);
        //User::find($id)->update(['name'=>'username']);
        return view("admin.update", compact('user'));

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::table('users')->where('id',$id)->delete();
        return redirect('/user');
    }
}
