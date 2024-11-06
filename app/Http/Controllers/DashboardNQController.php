<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Produk;
use App\Models\Artikel;
use App\Models\Konsultasi;
use App\Models\Paket;
use App\Models\Voucher;
use Laravel\Socialite\Facades\Socialite;


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
        $detail_paket = Paket::paginate(15);

        return view('dashboard.paket.index', compact('detail_paket'));
    }
    public function addPaket()
    {
        $detail_paket = Paket::paginate(15);

        return view('dashboard.paket.add', compact('detail_paket'));
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
        $nq_voucher = Voucher::paginate(15);

        return view('dashboard.voucher.index', compact('nq_voucher'));
    }
    public function addVoucher()
    {
        $nq_voucher = Voucher::paginate(15);

        return view('dashboard.voucher.add', compact('nq_voucher'));
    }
    public function konsultasi()
    {
        $konsultasi = Konsultasi::paginate(15);

        return view('dashboard.konsultasi.index', compact('konsultasi'));
    }
}
