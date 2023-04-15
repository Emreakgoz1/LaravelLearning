<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SayfalarController extends Controller
{
    public function emre3()
    {
        $kategoriler =  "Laravel Dersleri";
        return view("sayfa.emre3", ["bilgiler" => $kategoriler]);
    }
    public function emre4()
    {
        $isimler =  "Emre";
        return view("sayfa.emre4", compact("isimler"));
    }

    public function emre5()
    {
        $dizi =  [
            "adi" => "Emre",
            "Soyadi" => "Akgöz",
            "ders" => "laravel"
        ];
        return view("sayfa.emre4", compact("dizi"));
    }
    public function emre6()
    {
        $dizi =  [
            "adi" => "Emre",
            "Soyadi" => "Akgöz",
            "ders" => "laravel"
        ];
        return view("sayfa.emre5")->with("isimler", $dizi);
    }
}
