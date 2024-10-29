@extends('dashboard.index')

@section('title', 'User List')

@section('content')
    <div class="layout-px-spacing">

        <div class="middle-content container-xxl p-0">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area" style="margin-top:50px">
                            <table id="html5-extension" class="table dt-table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>User ID</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Nomor HP</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 0; @endphp
                                    @foreach ($data_users as $item)
                                        <tr>
                                            <td>{{ $item['id'] }}</td>
                                            <td>{{ $item['name'] }}</td>
                                            <td>{{ $item['email'] }}</td>
                                            <td>{{ $item['tanggal_lahir'] }}</td>
                                            <td>{{ $item['nomor_hp'] }}</td>
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
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">{{ $data_users->links() }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
