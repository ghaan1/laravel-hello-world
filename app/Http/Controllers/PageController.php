<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Hi! Selamat Datang di Website Laravel 8..";
    }

    public function about(){
        return "2041720178 <br> Muhammad Ghaniyu Haq Haryanto <br> TI - 2G <br> Baru";
    }

    public function articles($id){
        return "Ini adalah halaman Artikel dengan ID : $id , dengan page controller";
    }
}