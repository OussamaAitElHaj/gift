<?php

namespace App\Http\Controllers;

use App\City;
use DB;

use Illuminate\Http\Request;

class cityController extends Controller
{

    public function index()
    {
        
        return view("admin.citys.AddCity") ;
    }

    public function show()
    {
        $citys=DB::table('citys')->paginate(4);
        return view("admin.citys.citys",["citys"=>$citys]) ;
    }


    public function delete($id)
    {
        DB::table('citys')->where('id',$id)->delete();
        return redirect('/citys');
    }

    public function  edit($id) 
    {
        $citys = City::find($id);
        //User::find($id)->update(['name'=>'nameCity']);
        return view("admin.citys.updateCity", compact('citys'));
    }

    public function update(Request $request,$id)
    {
        $citys=City::findOrfail($id);
        $citys->name=$request->nameCity;
        $citys->fornisseur_id=$request->forni_id;

        $citys->save();
        return redirect("/citys");
       
    }

    public function store(Request $request)
    {
        
      
        $citys =City::create(["name"=>$request->nameCity,"fornisseur_id"=>$request->forni_id]);

        
        return redirect("/citys");
    }

}
