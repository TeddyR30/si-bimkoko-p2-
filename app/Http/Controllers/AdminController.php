<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $user = Admin::all();
        return view('admin.index', compact(['admin']));
    }
}
