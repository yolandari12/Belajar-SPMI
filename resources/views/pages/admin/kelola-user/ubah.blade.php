@extends('layouts.admin')

@section('content')
<div class="container-fluid">


    <div class="card shadow">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center m-0">
                <div class="font-weight-bold text-primary">
                    <p>Form Ubah Data</p>
                </div>
            </div>
        </div>
        <div class="card-body">
               <form action="{{ route('p-ubah-data-user', $user->id) }}" method="POST">
                   @csrf
                   @method('put')

                   <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $user->name }}">
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $user->email }}">
                </div>

                <div class="form-group">
                    <label for="">Role</label>
                    <select name="role" class="form-control">
                        <option value="{{ $user->role }}">Data Sebelumnya({{ $user->role }})</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </div>

                <div class="form-group" hidden>
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" value="{{ $user->password }}">
                </div>

                <button class="btn btn-sm btn-warning" type="submit">
                    Ubah
                </button>
               </form>
        </div>
    </div>



</div>
@endsection
