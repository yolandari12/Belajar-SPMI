<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LembagaMitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LembagaMitraController extends Controller
{
    public function list_data()
    {
        $items = LembagaMitra::all();

        return view('pages.admin.lembaga-mitra.index', [
            'items' => $items
        ]);
    }

    public function halaman_tambah()
    {
        return view('pages.admin.lembaga-mitra.create');
    }

    public function proses_tambah(Request $request)
    {

        $data = $request->all();

        if ($request->hasFile('bukti_kerjasama')) {
            $data['bukti_kerjasama'] = $request->file('bukti_kerjasama')
            ->store('assets/file', 'public');
        }else{
            $data = $request->all();
        }

        LembagaMitra::create($data);

        return redirect()->route('list-data.lembaga-mitra')
        ->with('status', 'Data berhasil ditambahkan');
    }

    public function halaman_ubah($id)
    {
        $item = LembagaMitra::find($id);

        return view('pages.admin.lembaga-mitra.edit', [
            'item' => $item
        ]);
    }

    public function proses_ubah(Request $request, $id)
    {
        $item = LembagaMitra::find($id);


        $data = $request->all();

        $lembaga_mitra = LembagaMitra::where('id', $item->id)->first();

        if (!empty($request->bukti_kerjasama)) {
            $path = 'storage/'.$lembaga_mitra['bukti_kerjasama'];
            if (File::exists($path)) {
                File::delete($path);
            }else{
                File::delete('storage/app/public/'.$lembaga_mitra['bukti_kerjasama']);
            }

            $data['bukti_kerjasama'] = $request->file('bukti_kerjasama')
            ->store('assets/file', 'public');
        }

        $item->update($data);

        return redirect()->route('list-data.lembaga-mitra')
        ->with('status', 'Data berhasil diubah');
    }

    public function proses_hapus($id)
    {
        $item = LembagaMitra::find($id);

        $lembaga_mitra = LembagaMitra::where('id', $item->id)->first();

        $path = 'storage/'.$lembaga_mitra['bukti_kerjasama'];

        if (File::exists($path)) {
            File::delete($path);
        }else{
            File::delete('storage/app/public/'.$lembaga_mitra['bukti_kerjasama']);
        }

        $item->delete();

        return redirect()->route('list-data.lembaga-mitra')
        ->with('status', 'Data berhasil dihapus');
    }
}
