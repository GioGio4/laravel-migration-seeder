<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\train;

class PageController extends Controller
{
    public function index()
    {
        $trains = train::all();
        return view('home', compact('trains'));
    }
}
