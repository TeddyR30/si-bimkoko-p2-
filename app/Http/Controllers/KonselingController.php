<?php

namespace App\Http\Controllers;

use App\Models\Konseling;
use Illuminate\Http\Request;

class KonselingController extends Controller
{
    public function index()
    {
        $user = Konseling::all();
        return view('konseling.index', compact(['konseling']));
    }
}
