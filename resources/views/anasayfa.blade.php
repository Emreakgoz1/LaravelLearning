@extends('tasarim.app')

@section('title')
Emre Akgöz İle Laravel Dersleri
@endsection

@section('container')
<div class="makale">
    <div class="baslik">Laravel Nedir</div>
    <div class="icerik">Laravele ait bilgier</div>
    <div class="devam"><a href="">Devamını Oku</a></div>
</div>
<div class="makale">
    <div class="baslik">Udemy Laravel</div>
    <div class="icerik">Laravele ait bilgier</div>
    <div class="devam"><a href="">Devamını Oku</a></div>
</div>
<div class="makale">
    <div class="baslik">Emre Akgöz</div>
    <div class="icerik">Laravele ait bilgier</div>
    <div class="devam"><a href="">Devamını Oku</a></div>
</div>
<div class="makale">
    <div class="baslik">Laravel 9</div>
    <div class="icerik">Laravele ait bilgier</div>
    <div class="devam"><a href="">Devamını Oku</a></div>
</div>
@endsection('container')

@section('header')
<div class="header">
    <div class="logo">Logo</div>
    <div class="menu">
        <ul>
            <li>Anasayfa</li>
            <li>Hakkımızda</li>
            <li>İletişim</li>
        </ul>
    </div>
</div>
@endsection