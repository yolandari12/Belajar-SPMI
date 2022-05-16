@extends('layouts.admin')


@section('title', 'Lembaga Mitra')
@section('content')
<div class="container-fluid">

    <div class="card shadow">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div class="font-weight-bold text-primary">
                    <p>List Data</p>
                </div>

                <a href="{{ route('halaman-tambah.lembaga-mitra') }}" class="btn btn-sm btn-primary">
                    <i class="fas fa-sm fa-plus-circle"></i>
                    Tambah Data
                </a>
            </div>
        </div>
        <div  class="card-body">
            <div class="table-responsive">
                <table class="table text-center table-bordered table-borded table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Lembaga Mitra</th>
                            <th>Judul Kegiatan</th>
                            <th>Bukti kerjasama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                        <tr>
                            <td>{{ $item->lembaga_mitra }}</td>
                            <td>{{ $item->judul_kegiatan_kerja_sama }}</td>
                            <td>
                                <img src="{{ Storage::url($item->bukti_kerjasama) }}" alt="" width="100" class="img-thumbnail">
                            </td>
                            <td>
                                <a href="{{ route('halaman-ubah.lembaga-mitra', $item->id) }}" class="btn btn-sm btn-warning">
                                    Edit
                                </a>

                                <a href="{{ route('proses-hapus.lembaga-mitra', $item->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin menghapus data?');">
                                    Hapus
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center">Data Kosong</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
