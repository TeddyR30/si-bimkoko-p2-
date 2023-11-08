<?php

namespace App\Http\Controllers;

use App\Models\Konseli;
use Illuminate\Http\Request;

class KonseliController extends Controller
{
    public function index()
    {
        $user = Konseli::all();
        return view('konseli.index', compact(['konseli']));
    }
}
