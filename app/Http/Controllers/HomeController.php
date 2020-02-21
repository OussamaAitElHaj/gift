<?php

namespace App\Http\Controllers;

use App\City;
use App\Fornisseur;
use App\Gift;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except("getcities");
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function cities()
    {
        $cities=City::all();
        return view("client.home")
        ->with("cities",$cities);
    }

    public function getCity(){
        if(isset($_GET["id"])){
         $fourn=Fornisseur::where("city",$_GET["id"])->first();
         $gifts=Gift::where("fornisseur_id",$fourn->id)->get();
         return view("client.homegift",["gifts"=>$gifts]) ;
        }
        else
        return redirect()->back();
       // return $_GET["id"];
    }

}
