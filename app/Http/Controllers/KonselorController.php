<?php

namespace App\Http\Controllers;

use App\Models\Konselor;
use Illuminate\Http\Request;

class KonselorController extends Controller
{
    public function index()
    {
        $user = Konselor::all();
        return view('konselor.index', compact(['konselor']));
    }
}
