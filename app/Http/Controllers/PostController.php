<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//öncelikle veritabanını dahil et
use Illuminate\Support\Facades\DB;
//öncelikle modeli cagır
use App\Models\Post;

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
    public function EloquentInsert1()
    {
        $post = new Post;
        $post->isim = "Emreeee";
        $post->soyisim = "Akgooooz";
        $post->save();
        echo "Veriler Eklendi";
    }
    public function EloquentInsert2()
    {
        Post::create([
            "isim" => "emreee1",
            "soyisim" => "Akgoooooz1"
        ]);
        echo "Veriler2 Eklendi";
    }
    public function EloquentSelect()
    {
        //Verileri Listelemek
        $post = Post::query()->get();
        return view("veriListesi", ["post" => $post]);
    }
    public function EloquentSelectAll()
    {
        //Verileri Listelemek2
        $post = Post::all();
        return view("veriListesi", ["post" => $post]);
    }
    public function EloquentSelectWhere()
    {
        $post = Post::where("id", ">", 1)->orderBy('id', 'DESC')->get();
        return view("veriListesi", ["post" => $post]);
    }
    public function EloquentVeriGuncelleme()
    {
        $id = 2;
        $guncelle = Post::query()->find($id);
        $guncelle->isim = "emre";
        $guncelle->soyisim = "akgoz";
        $guncelle->save();
        echo "guncellendi";
    }
    public function EloquentTopluVeriGuncelleme()
    {
        //id degeri 1 den büyük olan tüm verilerin isimlerini yeniden düzenledik
        $duzenle = Post::where('id', '>', 1)->update(['isim' => "topluDüzenlendi"]);
        echo "Düzenlendi";
    }
    public function EloquentVeriSilme()
    {
        $id = 2;
        $sil = Post::query()->find($id);
        $sil->delete();
        echo "Veri islindi";
    }
    public function EloquentTopluVeriSilme()
    {
        //id degeri birden büyük olan herkesi sildik.
        $duzenle = Post::where("id", '>', 1)->delete();
        echo "Silindi";
    }
}
