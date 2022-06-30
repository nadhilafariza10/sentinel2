<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function mapel()
    {
        return view('Pemilik.mapel');
    }
}
