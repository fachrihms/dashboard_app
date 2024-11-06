@extends('dashboard.index')

@section('title', 'Voucher List')

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
                                    <th>ID</th>
                                    <th>User ID</th>
                                    <th>Kode Voucher</th>
                                    <th>Paket ID</th>
                                    <th>Diaktivasi Oleh</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 0; @endphp
                                @foreach ($nq_voucher as $item)
                                    <tr>
                                        <td>{{ $item['id'] }}</td>
                                        <td>{{ $item['user_id'] }}</td>
                                        <td>{{ $item['voucher_code'] }}</td>
                                        <td>{{ $item['paket_id'] }}</td>
                                        <td>{{ $item['user_used'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">{{ $nq_voucher->links() }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection