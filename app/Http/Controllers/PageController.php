<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }
    public function about()
    {
        return 'Cyndu Fathur Rohman 2241720068';
    }
    public function articles($id)
    {
        return 'Halaman Artikel dengan ID' . $id;
    }
}
