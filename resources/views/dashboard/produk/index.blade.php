@extends('dashboard.index')

@section('title', 'User List')

@section('content')
    <div class="container-fluid">
        <!-- Div untuk membungkus judul dengan latar belakang putih -->
        <div class="bg-white p-3 rounded shadow-sm mb-4" style="margin-top: 20px;"> <!-- Tambahkan margin-top -->
            <h1 class="my-0">Daftar Produk</h1> <!-- Hilangkan margin-top dan margin-bottom pada h1 -->
        </div>

        <!-- Div untuk membungkus tabel -->
        <div class="bg-white p-3 rounded shadow-sm"> <!-- Div berwarna putih untuk tabel -->
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Kode Produk</th>
                            <th>Kategori</th>
                            <th>Nama Produk</th>
                            <th>Detail</th>
                            <th>Harga</th>
                            <th>Pemilik</th>
                            <th>Gambar</th>
                            <th>Dibuat Pada</th>
                            <th>Diperbarui Pada</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produks as $produk)
                            <tr>
                                <td>{{ $produk->id }}</td>
                                <td>{{ $produk->kode_produk }}</td>
                                <td>{{ $produk->kategori }}</td>
                                <td>{{ $produk->nama_produk }}</td>
                                <td>{{ $produk->detail }}</td>
                                <td>{{ $produk->harga }}</td>
                                <td>{{ $produk->pemilik }}</td>
                                <td>
                                    @if ($produk->image)
                                        <img src="{{ asset('storage/images/' . $produk->image) }}"
                                            alt="{{ $produk->nama_produk }}" width="100">
                                    @else
                                        Tidak ada gambar
                                    @endif
                                </td>
                                <td>{{ $produk->created_at }}</td>
                                <td>{{ $produk->updated_at }}</td>
                                <td>                                                
                                    <div class="btn-group">
                                    <button type="button" class="btn btn-dark btn-sm">Select</button>
                                    <button type="button"
                                        class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-chevron-down">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                        <a class="dropdown-item" href="#">Grant Permission</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">View Details</a>
                                    </div>
                                </div></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div> <!-- Akhir div membungkus tabel -->
    </div>

@endsection
