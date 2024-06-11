<?php

namespace App\Http\Controllers\User;

use App\Models\Gempa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LandingController extends Controller
{
    public function index()
    {
        $totalgempa = Gempa::count();
        $totalmati = Gempa::sum('korban');
        $data = Gempa::all();
        return view('user.pages.index', [
            'data' => $data,
            'totalgempa' => $totalgempa,
            'totalmati' => $totalmati
        ]);
    }

    public function detail($id)
    {
        $data = Gempa::find($id);
        return view('user.pages.detail', [
            'data' => $data
        ]);
    }
}

