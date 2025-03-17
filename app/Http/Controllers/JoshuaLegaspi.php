<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;

class JoshuaLegaspi extends Controller
{
    public function index()
    {
        $features = Feature::all();
        return view('features', compact('features'));
    }
}