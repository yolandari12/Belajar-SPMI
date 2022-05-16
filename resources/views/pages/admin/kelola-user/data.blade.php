@extends('layouts.admin')

@section('content')
<div class="container-fluid">


    <div class="card shadow">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center m-0">
                <div class="font-weight-bold text-primary">
                    <p>List User</p>
                </div>

                <a href="{{ route('tambah-data-user') }}" class="btn btn-sm btn-primary">
                    <i class="fas fa-sm fa-plus-circle"> Tambah data</i>
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->role }}</td>
                            <td>
                                <a href="{{ route('ubah-data-user', $item->id) }}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-sm fa-edit"></i>
                                </a>

                                <a href="{{ route('p-hapus-data-user', $item) }}" class="btn btn-sm btn-danger">
                                    <i class="fas fa-sm fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</div>
@endsection
