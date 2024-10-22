@extends('dashboard.index')

@section('title', 'User List')

@section('content')
    <div class="middle-content container-xxl p-0">
        <div class="row">

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-content widget-content-area">
                        <table id="html5-extension" class="table dt-table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Tanggal lahir</th>
                                    <th>Kode voucher</th>
                                    <th>Expired</th>
                                    <th>Salary</th>
                                    <th>Extn.</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tbody>
                                @for ($i = 0; $i < 10; $i++)
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                        <td>5421</td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="usr-img-frame mr-2 rounded-circle">
                                                    <img alt="avatar" class="img-fluid rounded-circle"
                                                        src="./src/assets/img/boy.png">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>


    </div>

@endsection
