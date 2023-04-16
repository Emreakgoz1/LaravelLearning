<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//öncelikle veritabanını dahil et
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function veriListesi()
    {
        $veriler = DB::select("SELECT * FROM post");
        return view("veriListesi", ["veriler" => $veriler]);
    }
    public function veriEkle()
    {
        //ınsert ınto tablomuzun adı isim soy isim bölümlerine ekleme yapıyoruz.ısım soyısım karsılıgını da values(?,?) şeklinde belirttim.
        $ekle = DB::insert("INSERT INTO post (isim,soyisim) VALUES (?,?)", ["emre", "akgoz"]);
        if ($ekle) {
            echo "veri eklendi";
        }
    }
    public function veriGuncelle()
    {
        //post tablosunu update et neleri set edicem isim soyisim id degerlerini elimle veriyorum.
        $guncelle = DB::update("UPDATE post SET isim=?, soyisim=? WHERE id=?", ["emre1", "akgoz1", 1101]);
        if ($guncelle) {
            echo "Veri güncellendi";
        }
    }
    public function veriSil()
    {
        //idsi 1101 olan kolonu sil
        $sil = DB::delete("DELETE FROM post WHERE id=?", [1101]);
        if ($sil) {
            echo "Veri silindi";
        }
    }
    public function veriTemizle()
    {
        $temizle = DB::statement("TRUNCATE table post");
        if ($temizle) {
            echo "Tüm Veriler Silindi";
        }
    }
    public function tabloSil()
    {
        $tabledelete = DB::statement("DROP TABLE post");
        if ($tabledelete) {
            echo "tablo silindi";
        }
    }
}
