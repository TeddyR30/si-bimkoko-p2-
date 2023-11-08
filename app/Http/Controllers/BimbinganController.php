<?php

namespace App\Http\Controllers;

use App\Models\Bimbingan;
use Illuminate\Http\Request;

class BimbinganController extends Controller
{
    public function index()
    {
        $bimbingan = bimbingan::all();
        return view('bimbingan.index', compact(['index']));
    }
}
