<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class HomeController extends Controller
{
    public function home()
    {
        return view('Pemilik.Home');
        
    }
    // public function home()
    // {
    //     // if(Sentinel::hasRole(2)){
    //     //     return view('Pemilik.Home');
    //     // }elseif(Sentinel::hasRole(1)){
    //     //     return view('Admin.Home');
    //     // }

    //     if ($user = Sentinel::getUser())
    // {
    //     if ($user->inRole(1))
    //     {
    //         return view('Admin.Home');
    //     }elseif($user->inRole(2))
    //     {
    //         return view('Pemilik.Home');
    //     }
    // }
}
    

