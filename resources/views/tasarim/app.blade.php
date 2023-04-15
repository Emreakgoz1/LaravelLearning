<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        * {
            padding: 0px;
            margin: 0px;
            list-style-type: none;
        }

        #header {
            height: 50px;
            background-color: antiquewhite;
        }

        .header {
            width: 900px;
            margin: 0px auto
        }

        #header .logo {
            width: 200px;
            float: left;
            padding: 15px;
            font-weight: bold;
        }

        #header .menu {
            float: right;
        }

        #header .menu ul li {
            float: left;
            padding: 15px
        }

        #container {
            width: 900px;
            margin: 65px auto
        }

        #container .makale {
            border: 1px solid #ddd;
            padding: 10px;
            margin: 10px 0px
        }

        #container .makale .baslik {
            font-weight: bold;
            font-size: 20px;
            border-bottom: 1px solid
        }

        #container .makale .icerik {
            padding: 10px 0px;
        }

        #container .makale .devam {
            padding: 5px 0px
        }

        #container .makale .devam {
            padding: 5px 0px
        }

        #container .makale .devam a {
            text-decoration: none;
            color: rebeccapurple;
            font-weight: bold;
        }

        #footer {
            height: 50px;
            background-color: antiquewhite
        }

        .footer {
            width: 900px;
            margin: 20px auto;
            padding: 15px;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>

<body>
    <div id="header">
        @yield('header')
        <!--<div class="header">
            <div class="logo">Logo</div>
            <div class="menu">
                <ul>
                    <li>Anasayfa</li>
                    <li>Hakkımızda</li>
                    <li>İletişim</li>
                </ul>
            </div>
        </div> -->
    </div>
    <div id="container">
        @yield('container')
        <!--    <div class="makale">
            <div class="baslik">Laravel Nedir</div>
            <div class="icerik">Laravele ait bilgier</div>
            <div class="devam"><a href="">Devamını Oku</a></div>
        </div>
        <div class="makale">
            <div class="baslik">Laravel Nedir</div>
            <div class="icerik">Laravele ait bilgier</div>
            <div class="devam"><a href="">Devamını Oku</a></div>
        </div>
        <div class="makale">
            <div class="baslik">Laravel Nedir</div>
            <div class="icerik">Laravele ait bilgier</div>
            <div class="devam"><a href="">Devamını Oku</a></div>
        </div>
        <div class="makale">
            <div class="baslik">Laravel Nedir</div>
            <div class="icerik">Laravele ait bilgier</div>
            <div class="devam"><a href="">Devamını Oku</a></div>
        </div>-->
    </div>
    <div id="footer">
        <div class="footer">Emre Akgoz İle Laravel Öğreniyorum-2023</div>
    </div>
</body>

</html>