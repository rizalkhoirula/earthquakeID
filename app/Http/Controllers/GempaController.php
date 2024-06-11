<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gempa;

class GempaController extends Controller
{
    public function index()
    {
        $gempa = Gempa::all();
        return view('admin.pages.data-gempa', [
            'gempa' => $gempa
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'radius' => 'required',
            'korban' => 'required',
            

        ], [
            'nama.required' => 'Nama gempa harus diisi.',
            'tanggal.required' => 'Tanggal harus diisi.',
            'latitude.required' => 'Latitude harus diisi.',
            'longitude.required' => 'Longitude harus diisi.',
            'radius.required' => 'Radius harus diisi.',
            'korban.required' => 'korban harus diisi.',

        ]);

        $gempa = new Gempa;
        $gempa->nama = $request->nama;
        $gempa->tanggal = $request->tanggal;
        $gempa->latitude = $request->latitude;
        $gempa->longitude = $request->longitude;
        $gempa->radius = $request->radius;
        $gempa->korban = $request->korban;
        $gempa->save();

        return redirect('/gempa')->with('store', 'Data berhasil ditambahkan.');
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'longitude' => 'required',
            'radius' => 'required',
            'korban' => 'required',

        ], [
            'nama.required' => 'Nama gempa harus diisi.',
            'tanggal.required' => 'Tanggal harus diisi.',
            'latitude.required' => 'Latitude harus diisi.',
            'longitude.required' => 'Longitude harus diisi.',
            'radius.required' => 'Radius harus diisi.',
            'korban.required' => 'korban harus diisi.',

        ]);

        $gempa = Gempa::find($id);
        $gempa->nama = $request->nama;
        $gempa->tanggal = $request->tanggal;
        $gempa->latitude = $request->latitude;
        $gempa->longitude = $request->longitude;
        $gempa->radius = $request->radius;
        $gempa->korban = $request->korban;
        $gempa->save();

        return redirect('/gempa')->with('update', 'Data berhasil diubah.');
    }

    public function destroy($id)
    {
        Gempa::find($id)->delete();
        return redirect('/gempa')->with('delete', 'Data berhasil dihapus.');
    }
}
