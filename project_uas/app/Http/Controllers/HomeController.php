<?php

namespace App\Http\Controllers;

use App\Models\Lokers;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function landingpage(){
        return view('frontpage.landingpage', ['Titel' => "LandingPage"]);
    }
    public function beranda(){
        $loker=Lokers::all();
        $category=Category::all();
        return view('frontpage.beranda', ['Titel' => "Beranda"], compact('loker','category'));
    }
    public function admin(){
        return view('admin.admin-dashboard', ['Titel' => "admin"]);
    }
    public function daftar(){
        return view('frontpage.daftar', ['Titel' => "daftar"]);
    }
    public function table(){
        return view('admin.table', ['Titel' => "table"]);
    }
    public function halaman(){
        return view('frontpage.halaman', ['Titel' => "halaman"]);
    }
    public function form()
    {
        return view('frontpage.form', ['Titel' => "form"]);
    }
    public function akun()
    {
        return view('frontpage.Akun', ['Titel' => "akun"]);
    }
    public function buat()
    {
        return view('frontpage.buatlowongan', ['Titel' => "buatlowongan"]);
    }
    public function detailProduk()
    {
        $loker=Lokers::all();
        return view('frontpage.detailProduk', ['Titel' => "detailProduk"],compact('loker'));
    }
}
