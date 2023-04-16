<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmreController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SayfalarController;
use App\Http\Controllers\UyelerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Bu router

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/ilkroutedenemem', function () {
    return 'ilk route denemem';
});
Route::get('/hakkimdatest', function () {
    return 'Merhaba ben Emre Akgöz';
});
Route::get('/iletişimtest', function () {
    return 'merhabalar ben Emre Akgöz';
});
Route::get('/hakkimdaviewtest', function () {
    return view('sayfa.hakkimda');
});
Route::get('/iletişimviewtest', function () {
    return view('sayfa.iletisim');
});


//Route controller cagırma

Route::get('/hakkimda', [UyelerController::class, "hakkimda"]);
*/



/*Route::prefix('sayfalar')->group(function () {
    Route::get("/hakkimda", function () {
        return "Hakkimda Sayfasi";
    });
    Route::get("/iletişim", function () {
        return "İletişim sayfasi";
    });
});




//Route gruplandırarak yapılışı üstteki prefix ile de yapılabilir.
Route::group(["prefix" => "sayfalar"], function () {
    Route::get("/hakkimda", function () {
        return "dizi Hakkimda Sayfasi";
    });
    Route::get("/iletişim", function () {
        return " dizi İletişim sayfasi";
    });
});

//route üzerinden id alma
//uyeler / dan sonraki alan benim id'im olacak function($id) ben burayı alabilmek için su sekilde seslenmek istoyurm.
Route::get('/uyeler/{id}', function ($id) {
    return "Üye ID'si : " . $id;
});

//route üzerinde birden fazla parametre alma
Route::get('/sayfalar/{sayfa}/{id}', function ($sayfa, $id) {
    return "Hangi Sayfadayım :  " . $sayfa . "Hangi user olarak : " . $id;
});
//parametre kesin olarak gelmeli mi yoksa boş bırakbilirmi diyoruz ? işareti ile ve boşluk bırakarak
//burada id için yaptık.
Route::get('/sayfalar/{sayfa}/{id?}', function ($sayfa, $id = "") {
    return "Hangi Sayfadayım :  " . $sayfa . " <br> Hangi user olarak : " . $id;
});



//yönlendirme yaptırma
Route::get("/test", function () {
    return "test alanı";
});


Route::fallback(function () {
    return view('404');
});


//Parametreler arasında yönlendirme

//Route::redirect('/', '/hakkimda');
//Bu kişl anasayfaya girdigi anda hakkimda sayfasına yönlendirmiş oldum ben onu
//Aynı zamanda bir kişi eksiden /uye diye giriş yaptıysa biz o urlye yönlendirme yapıp
// redirect('/uye','/uyeler') yapıp /uye şeklinde giriş yapan kişiyi oraya yönlendirebiliriz
*/



//uyelere girildiginde herhangi biri işlem yapılmadıgında index() fonksiyonunu çağırır.

//Route::resource("uyeler", UyelerController::class);


//uyelere girildiginde ben create fonksiyonunu calıstırmıs oldum.Ön tanımlı fonks olarak.
// uyeler/create
Route::resource("uyeler", UyelerController::class);

//showla yakalama
Route::resource("uyeler", UyelerController::class);


//php artisan route:list ile terminalerden routelar ve işlemleri görebilirsinç.

//view örnekleri

Route::get("/emre", function () {
    return view("sayfa.emre");
});


//View içerisine dizi ile  Veri gönderme

Route::get("/emre2", function () {
    return view("sayfa.emre2", ["isim" => "emre", "soyisim" => "akgoz"]);
});


//View içerisine Controllerdan Veri Gönderme

Route::get("/emre3", [SayfalarController::class, "emre3"]);

//View içerisine compact ile Veri Gönderme

Route::get("/emre4", [SayfalarController::class, "emre4"]);

//View içerisine compact ile Dizi gönderme
Route::get("/emre4", [SayfalarController::class, "emre5"]);

//View içerisine with ile veri gönderme
Route::get("/emre5", [SayfalarController::class, "emre6"]);

//Laravel Katmanlar

Route::get('/', function () {
    return view('anasayfa');
});

Route::get('ifelse', function () {
    return view('blade-directives.if-else');
});

Route::get('switch-case', function () {
    return view('blade-directives.switch-case');
});
Route::get('for', function () {
    return view('blade-directives.for');
});
Route::get('foreach', function () {
    return view('blade-directives.foreach');
});
Route::get('while', function () {
    return view('blade-directives.while');
});
Route::get('include', function () {
    return view('blade-directives.include');
});
Route::get('url', function () {
    return view('blade-directives.url');
});

//Veri listeleme için veriListesi route olusturuyoruz.
Route::get("/", [PostController::class, "veriListesi"]);
//Veri ekleme için route işlemi
Route::get("/ekle", [PostController::class, "veriEkle"]);
//Veri güncelleme için route işlemi
Route::get("guncelle", [PostController::class, "veriGuncelle"]);
//Veri silme için route işlemi
Route::Get("sil", [PostController::class, "veriSil"]);
//statement için route işlemi
Route::get("bosalt", [PostController::class, "veriTemizle"]);
//tablo silmek için route işlemi
Route::get("tablosil", [PostController::class, "tabloSil"]);
//Eloquent veri ekleme route işlemi
Route::get("EloquentInsert1", [PostController::class, "EloquentInsert1"]);
//Eloquent veri ekleme2 route işlemi
Route::get("EloquentInsert2", [PostController::class, "EloquentInsert2"]);
//Eloquent veri listeleme route işlemi
Route::get("EloquentSelect", [PostController::class, "EloquentSelect"]);
//eloquent veri listeleme2 route işlem
Route::get("EloquentSelectAll", [PostController::class, "EloquentSelectAll"]);
//eloquent veri listeleme where ile
Route::get("EloquentSelectWhere", [PostController::class, "EloquentSelectWhere"]);
//eloquent veri günelleme
Route::get("EloquentVeriGuncelleme", [PostController::class, "EloquentVeriGuncelleme"]);
//eloquent toplu veri güncelleme
Route::get("EloquentVeriSilme", [PostController::class, "EloquentVeriSilme"]);
//eloquent veri silme
Route::get("EloquentVeriSilme", [PostController::class, "EloquentVeriSilme"]);
//eloquent toplu veri silme
Route::get("EloquentTopluVeriSilme", [PostController::class, "EloquentTopluVeriSilme"]);
