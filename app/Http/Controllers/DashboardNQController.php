<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class DashboardNQController extends Controller
{
    public function login()
    {
        return view('dashboard.login.index2');
    }
    public function index()
    {
        return view('dashboard.index2');
    }
    public function user()
    {
        $data_users=Users::paginate(15);
        return view('dashboard.user.index2', compact('data_users'));
    }
    public function paket()
    {
        return view('dashboard.paket.index2');
    }
    public function produk()
    {
        return view('dashboard.produk.index2');
    }
    public function artikel()
    {
        return view('dashboard.artikel.index2');
    }
}
