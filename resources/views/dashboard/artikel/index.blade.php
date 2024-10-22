@extends('dashboard.index')

@section('title', 'User List')

@section('content')
    <div class="container-fluid">
        <!-- Div untuk membungkus judul dengan latar belakang putih -->
        <div class="bg-white p-3 rounded shadow-sm mb-4" style="margin-top: 20px;">
            <h1 class="my-0">Daftar Artikel</h1>
        </div>

        <!-- Div untuk membungkus tabel -->
        <div class="bg-white p-3 rounded shadow-sm">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Judul</th>
                            <th>Isi</th>
                            <th>ID User</th>
                            <th>Image</th>
                            <th>Link</th>
                            <th>Dibuat Pada</th>
                            <th>Diperbarui Pada</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($artikels as $artikel)
                            <tr>
                                <td>{{ $artikel->id }}</td>
                                <td>{{ $artikel->judul }}</td>
                                <td>{{ $artikel->isi }}</td>
                                <td>{{ $artikel->id_user }}</td>
                                <td>
                                    @if ($artikel->image)
                                        <img src="{{ asset('storage/' . $artikel->image) }}" alt="{{ $artikel->judul }}"
                                            width="100">
                                    @else
                                        Tidak ada gambar
                                    @endif
                                </td>
                                <td>{{ $artikel->link }}</td>
                                <td>{{ $artikel->created_at }}</td>
                                <td>{{ $artikel->updated_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div> <!-- Akhir div membungkus tabel -->
    </div>
@endsection
