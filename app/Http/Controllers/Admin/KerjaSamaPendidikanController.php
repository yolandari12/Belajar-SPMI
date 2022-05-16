<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KerjaSamaPendidikan;
use Illuminate\Http\Request;

class KerjaSamaPendidikanController extends Controller
{
    public function data()
    {
        $items = KerjaSamaPendidikan::all();

        return view('pages.admin.kerjasama-pendidikan.index', [
            'items' => $items
        ]);
    }

    public function halaman_tambah()
    {
        return view('pages.admin.kerjasama-pendidikan.create');
    }

    public function proses_tambah(Request $request)
    {

        //    menangkap semua kiriman data
        $data = $request->all();

        // simpan data yang kirimkan
        // ke table kerja sama pendidikan
        KerjaSamaPendidikan::create($data);

        // kembali kehalaman data kerja sama pendidikan

        return redirect()->route('data-kerjasama-pendidikan');

    }

    public function halaman_ubah($id)
    {
        // cari data by id
        $item = KerjaSamaPendidikan::find($id);

        // tampilin data ke view di bawah
        return view('pages.admin.kerjasama-pendidikan.edit', [
            'item' => $item
        ]);
    }

    public function proses_ubah(Request $request, $id)
    {
        // cari data by id
        $item = KerjaSamaPendidikan::find($id);

        // tangekp all data request
        $data = $request->all();

        //ubah data nya
        $item->update($data);

        return redirect()->route('data-kerjasama-pendidikan');

    }

    public function proses_hapus($id)
    {
        $item = KerjaSamaPendidikan::find($id);

        $item->delete();

        return redirect()->route('data-kerjasama-pendidikan');
    }
}
