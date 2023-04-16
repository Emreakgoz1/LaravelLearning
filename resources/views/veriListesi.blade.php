@php
    //verileri listeyebilmek için controller daki veriler stringini burda foreach ile döndürüyoruz
    //Sonrada bana sunulan database kolonlarından istedigimi yazdıracagım.
@endphp
@foreach ($veriler as $veri)
    İsim : {{$veri->$isim}} <br>
    Soyİsim: {{$veri->$soyisim}} <br>
    
@endforeach
@php
    //Eloquentin select sorgusundan donen post degerini burada döndürdük
@endphp
@foreach ($post as $p)
    İsim : {{$p->$isim}} <br>
    Soyİsim: {{$p->$soyisim}} <br>
    
@endforeach