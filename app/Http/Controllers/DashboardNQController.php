<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Produk;
use App\Models\Artikel;


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
        // Ambil semua data produk dari database
        $produk = Produk::all();

        // Kirim data ke view 'dashboard.index'
        return view('dashboard.produk.index', ['produks' => $produk]);
    }
    public function artikel()
    {
        // Ambil semua data produk dari database
        $artikel = Artikel::all();

        // Kirim data ke view 'dashboard.index'
        return view('dashboard.artikel.index', ['artikels' => $artikel]);
    }
    public function artikelCreate()
    {
        // Kirim data ke view 'dashboard.index'
        return view('dashboard.artikel.create');
    }
    public function ckEditorUpload()
    {
        // Kirim data ke view 'dashboard.index'
        return view('dashboard.artikel.create');
    }
    public function voucher()
    {
        return view('dashboard.voucher.index');
    }
}
