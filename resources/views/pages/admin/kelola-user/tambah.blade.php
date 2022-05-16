@extends('layouts.admin')

@section('content')
<div class="container-fluid">


    <div class="card shadow">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center m-0">
                <div class="font-weight-bold text-primary">
                    <p>Form Tambah Data</p>
                </div>
            </div>
        </div>
        <div class="card-body">
               <form action="{{ route('p-tambah-data-user') }}" method="POST">
                   @csrf

                   <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    <label for="">Role</label>
                    <select name="role" class="form-control">
                        <option value="">Pilih Role</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" value="{{ old('password') }}">
                </div>

                <button class="btn btn-sm btn-primary" type="submit">
                    Simpan
                </button>
               </form>
        </div>
    </div>



</div>
@endsection
