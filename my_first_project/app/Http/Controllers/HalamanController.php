<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function Galeris(){
        return View('layouts.frontend.galeri');
    }
}
