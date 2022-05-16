@extends('layouts.admin')


@section('title', 'Tambah Lembaga Mitra')
@section('content')
    <div class="container-fluid">

        <div class="card shadow">
            <div class="card-header">
                <div class="d-flex justify-content-start">
                    <div class="font-weight-bold text-primary">
                        <p>Form Tambah</p>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('proses-tambah.lembaga-mitra') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Lemmbaga mitra:</label>
                                <input type="text" name="lembaga_mitra"
                                    class="form-control"
                                    placeholder="Masukan lembaga mitra">
                            </div>

                            <div class="form-group">
                                <label for="">Judul kegiatan kerjasama</label>
                                <input type="text" name="judul_kegiatan_kerja_sama"
                                    class="form-control"
                                    placeholder="Masukan judul kegiatan kerjasama">
                            </div>

                            <div class="form-group">
                                <label for="">Waktu</label>
                                <input type="time" name="waktu"
                                    class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Tahun berakhir kerjasama</label>
                                <input type="text" name="tahun_berakhirnya_kerjasama"
                                    class="form-control"
                                    placeholder="Tahun berakhir kerjasama">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Tingkat</label>
                                <select name="tingkat" class="form-control">
                                    <option value="">Pilih tingkat</option>
                                    <option value="internasional">Internasional</option>
                                    <option value="nasional">Nasional</option>
                                    <option value="wilayah_lokal">Wilayah Lokal</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Manfaat bagi yang diakreditasi</label>
                                <input type="text" name="manfaat_bagi_yang_diakterditasi"
                                    class="form-control"
                                    placeholder="Manfaat bagi yang diaktreditasi">
                            </div>

                            <div class="form-group">
                                <label for="">Durasi</label>
                                <input type="text" name="durasi" class="form-control"
                                    placeholder="Masukan durasi">
                            </div>

                            <div class="form-group">
                                <label for="">Bukti kerjasama</label>
                                <input type="file" name="bukti_kerjasama"
                                    class="form-control">
                            </div>
                        </div>

                    </div>

                    <button class="btn btn-sm btn-primary float-right" type="submit">
                        Simpan
                    </button>
                </form>
            </div>
        </div>

    </div>
@endsection
