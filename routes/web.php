<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmreController;
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