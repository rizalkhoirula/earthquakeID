<?php

namespace App\Http\Controllers;

use App\Models\Gempa;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // Menghitung jumlah gempa dan total kematian
        $jumlah_gempa = Gempa::count();
        $totalmati = Gempa::sum('korban');

        // Mengambil data gempa berdasarkan tanggal
        $gempaData = Gempa::select('tanggal', 'korban')
            ->orderBy('tanggal', 'asc')
            ->get();

        // Memformat tanggal untuk label grafik
        $labels = $gempaData->pluck('tanggal')->map(function ($date) {
            return Carbon::parse($date)->format('d-m-Y'); // Sesuaikan format dengan kebutuhan
        });

        // Data jumlah korban
        $dataMati = $gempaData->pluck('korban');

        return view('admin.pages.dashboard', [
            'jumlah_gempa' => $jumlah_gempa,
            'totalmati' => $totalmati,
            'labels' => $labels,
            'dataMati' => $dataMati,
        ]);
    }
}
