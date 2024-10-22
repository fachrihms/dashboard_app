<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class DashboardNQController extends Controller
{
    public function login()
    {
        return view('dashboard.login.index');
    }
    public function index()
    {
        return view('dashboard.index');
    }
    public function user()
    {
        $data_users=Users::paginate(15);
        return view('dashboard.user.index', compact('data_users'));
    }
    public function paket()
    {
        return view('dashboard.paket.index');
    }
    public function produk()
    {
        return view('dashboard.produk.index');
    }
    public function artikel()
    {
        return view('dashboard.artikel.index');
    }
    public function voucher()
    {
        return view('dashboard.voucher.index');
    }
}
