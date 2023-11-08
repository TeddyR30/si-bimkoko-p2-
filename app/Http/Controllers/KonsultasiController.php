<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    public function index()
    {
        $user = Konsultasi::all();
        return view('konsultasi.index', compact(['konsultasi']));
    }
}
