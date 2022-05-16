@extends('layouts.admin')


@section('title', 'Ubah Lembaga Mitra')
@section('content')
    <div class="container-fluid">

        <div class="card shadow">
            <div class="card-header">
                <div class="d-flex justify-content-start">
                    <div class="font-weight-bold text-primary">
                        <p>Form Ubah</p>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('proses-ubah.lembaga-mitra', $item->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Lemmbaga mitra:</label>
                                <input type="text" name="lembaga_mitra" class="form-control"
                                    placeholder="Masukan lembaga mitra" value="{{ $item->lembaga_mitra }}">
                            </div>

                            <div class="form-group">
                                <label for="">Judul kegiatan kerjasama</label>
                                <input type="text" name="judul_kegiatan_kerja_sama" class="form-control"
                                    placeholder="Masukan judul kegiatan kerjasama"
                                    value="{{ $item->judul_kegiatan_kerja_sama }}">
                            </div>

                            <div class="form-group">
                                <label for="">Waktu</label>
                                <input type="time" name="waktu" class="form-control" value="{{ $item->waktu }}">
                            </div>

                            <div class="form-group">
                                <label for="">Tahun berakhir kerjasama</label>
                                <input type="text" name="tahun_berakhirnya_kerjasama" class="form-control"
                                    placeholder="Tahun berakhir kerjasama"
                                    value="{{ $item->tahun_berakhirnya_kerjasama }}">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Tingkat</label>
                                <select name="tingkat" class="form-control">
                                    <option value="{{ $item->tingkat }}">Data sebelumnya({{ $item->tingkat }})</option>
                                    <option value="internasional">Internasional</option>
                                    <option value="nasional">Nasional</option>
                                    <option value="wilayah_lokal">Wilayah Lokal</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Manfaat bagi yang diakreditasi</label>
                                <input type="text" name="manfaat_bagi_yang_diakterditasi" class="form-control"
                                    placeholder="Manfaat bagi yang diaktreditasi"
                                    value="{{ $item->manfaat_bagi_yang_diakterditasi }}">
                            </div>


                            <div class="form-group">
                                <label for="">Durasi</label>
                                <input type="text" name="durasi" class="form-control" placeholder="Masukan durasi"
                                    value="{{ $item->durasi }}">
                            </div>

                            <div class="form-group">
                                <label for="">Bukti kerjasama</label>
                                <input type="file" name="bukti_kerjasama" class="form-control">
                            </div>

                            <div class="form-group">
                                <img src="" alt="" width="100">
                                @if (empty($item->bukti_kerjasama) && $item->bukti_kerjasama == null)
                                @else
                                    <img src="{{ Storage::url($item->bukti_kerjasama) }}" alt="" width="100"
                                        class="mt-4">
                                    <label for="">Old Gambar</label>
                                @endif
                            </div>
                        </div>

                    </div>

                    <button class="btn btn-sm btn-warning float-left" type="submit">
                        Ubah
                    </button>
                </form>
            </div>
        </div>

    </div>
@endsection
