@extends('layout')

@section('content')
<div class="container">
    <h1>Data Supir</h1>
    <a href="{{ route('drivers.create') }}" class="btn btn-primary">Tambah Supir</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Nomor Lisensi</th>
                <th>Nomor Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($drivers as $driver)
                <tr>
                    <td>{{ $driver->name }}</td>
                    <td>{{ $driver->license_number }}</td>
                    <td>{{ $driver->phone_number }}</td>
                    <td>
                        <a href="{{ route('drivers.edit', $driver->id) }}" class="btn btn-warning">Ubah</a>
                        <form action="{{ route('drivers.destroy', $driver->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection