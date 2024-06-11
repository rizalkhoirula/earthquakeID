<?php

namespace App\Http\Controllers;

use App\Models\Gempa;
use Illuminate\Http\Request;


class VisualisasiGempaController extends Controller
{
    public function index()
    {
        $data = Gempa::all();
        return view('admin.pages.visualisasi-gempa', [
            'data' => $data
        ]);
    }
}
