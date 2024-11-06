@extends('dashboard.index')

@section('title', 'Paket List')

@section('content')

<div class="layout-px-spacing">

    <div class="middle-content container-xxl p-0">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-content widget-content-area" style="margin-top:50px">
                        <div class="table-responsive">
                        <table id="html5-extension" class="table dt-table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Paket ID</th>
                                    <th>Kode Paket</th>
                                    <th>Hari</th>
                                    <th>Harga</th>
                                    <th>Deskripsi 1</th>
                                    <th>Deskripsi 2</th>
                                    <th>Deskripsi 3</th>
                                    <th>Deskripsi 4</th>
                                    <th>Deskripsi 5</th>
                                    <th>Deskripsi 6</th>
                                    <th>Deskripsi 7</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 0; @endphp
                                @foreach ($detail_paket as $item)
                                    <tr>
                                        <td>{{ $item['id'] }}</td>
                                        <td>{{ $item['id_paket'] }}</td>
                                        <td>{{ $item['kode_paket'] }}</td>
                                        <td>{{ $item['hari'] }}</td>
                                        <td>{{ $item['harga'] }}</td>
                                        <td>{{ $item['deskripsi1'] }}</td>
                                        <td>{{ $item['deskripsi2'] }}</td>
                                        <td>{{ $item['deskripsi3'] }}</td>
                                        <td>{{ $item['deskripsi4'] }}</td>
                                        <td>{{ $item['deskripsi5'] }}</td>
                                        <td>{{ $item['deskripsi6'] }}</td>
                                        <td>{{ $item['deskripsi7'] }}</td>
                                        <td>
                                            {{-- <div class="btn-group">
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
                                            </div> --}}
                                            <button type="button" class="btn btn-success"><i class="fas fa-plus"></i></button>
                                            <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                            <button type="button" class="btn btn-warning"><i class="fas fa-pencil"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                        <div class="d-flex justify-content-center">{{ $detail_paket->links() }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
