@extends('layout')

@section('content')
<div class="container">
    <h1>Ubah Data Supir</h1>
    <form action="{{ route('drivers.update', $driver->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $driver->name }}" required>
        </div>
        <div class="form-group">
            <label for="license_number">Nomor Lisensi:</label>
            <input type="text" class="form-control" id="license_number" name="license_number" value="{{ $driver->license_number }}" required>
        </div>
        <div class="form-group">
            <label for="phone_number">Nomor Telepon:</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $driver->phone_number }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection