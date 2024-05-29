@extends('layout')

@section('content')
<div class="container">
    <h1>Tambah Supir Baru</h1>
    <form action="{{ route('drivers.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nama:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="license_number">Nomor Lisensi:</label>
            <input type="text" class="form-control" id="license_number" name="license_number" required>
        </div>
        <div class="form-group">
            <label for="phone_number">Nomor Telepon:</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection