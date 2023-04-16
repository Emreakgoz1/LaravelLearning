@php
    //verileri listeyebilmek için controller daki veriler stringini burda foreach ile döndürüyoruz
    //Sonrada bana sunulan database kolonlarından istedigimi yazdıracagım.
@endphp
@foreach ($veriler as $veri)
    İsim : {{$veri->$isim}} <br>
    Soyİsim: {{$veri->$soyisim}} <br>
    
@endforeach