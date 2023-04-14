<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UyelerController extends Controller
{
    /* public function hakkimda()
    {
        return view("sayfa.hakkimda");
    }*/
    public function index()
    {
        return "Anasayfa";
    }
    public function create()
    {
        return "Form oluştur.";
    }
    public function show($deger)
    {
        return "bulunan : " . $deger;
    }
}
