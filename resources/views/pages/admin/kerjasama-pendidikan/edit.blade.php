@extends('layouts.admin')

@section('content')
<div class="container-fluid">


    <div class="card shadow">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center m-0">
                <div class="font-weight-bold text-primary">
                    <p>Form Ubah Data Kerjasama Pendidikan</p>
                </div>
            </div>
        </div>
        <div class="card-body">
               <form action="{{ route('proses-ubah-kerjasama-pendidikan', $item->id) }}" method="POST">
                   @csrf
                   @method('put')

                   <div class="form-group">
                    <label for="">Lembaga Mitra</label>
                    <input type="text" name="lembaga_mitra" class="form-control" placeholder="Lembaga Mitra" value="{{ $item->lembaga_mitra }}">
                </div>

                <div class="form-group">
                    <label for="">Tingkat</label>
                    <input type="text" name="tingkat" class="form-control" placeholder="Tingkat" value="{{ $item->tingkat }}">
                </div>

                <div class="form-group">
                    <label for="">Judul Kegiatan PS</label>
                    <input type="text" name="judul_kegiatan_PS" class="form-control" placeholder="Judul Kegiatan PS" value="{{ $item->judul_kegiatan_PS }}">
                </div>

                <div class="form-group">
                    <label for="">Manfaat</label>
                    <input type="text" name="manfaat" class="form-control" placeholder="Manfaat" value="{{ $item->manfaat }}">
                </div>

                <div class="form-group">
                    <label for="">Waktu Durasi</label>
                    <input type="time" name="waktu_durasi" class="form-control" placeholder="Waktu Durasi" value="{{ $item->waktu_durasi }}">
                </div>

                <div class="form-group">
                    <label for="">Bukti Kerjasama</label>
                    <input type="text" name="bukti_kerjasama" class="form-control" placeholder="Bukti Kerjasama" value="{{ $item->bukti_kerjasama }}">
                </div>

                <div class="form-group">
                    <label for="">Tahun</label>
                    <input type="text" name="tahun" class="form-control" placeholder="Tahun" value="{{ $item->tahun }}">
                </div>

                <button class="btn btn-sm btn-warning" type="submit">
                    Ubah
                </button>
               </form>
        </div>
    </div>



</div>
@endsection
