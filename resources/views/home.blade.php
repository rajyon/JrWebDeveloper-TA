<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::to('/')}}/css/home.css">
    <script src="{{ URL::to('/')}}/js/home.js"></script>
    <title>Outsource Accelerator</title>
</head>
<body>
    {{-- <HIDDEN --}}
    <div id="hidden_logo"><img src="{{ URL::to('/')}}/image/logo.png" alt="OA_Logo" height="60px" width="90px"></div>
    <div id="burger_menu"><button onclick="showMenu()" id="bm_btn"><img src="{{ URL::to('/')}}/image/menu.png" alt="burger_menu"></button></div>
    <div id="hidden_menu" onmouseleave="hideMenu()">
        <ul id="hm_ul">
            <li class="hm_li"><a  class="hm_a" href="#">About OA</a></li><br>
            <li class="hm_li"><a  class="hm_a" href="#">About SP</a></li><br>
            <li class="hm_li"><a  class="hm_a" href="#">Login</a></li>
            <li class="hm_li" id="hmli_close"><button onclick="hideMenu()" id="bm_btn"><img src="{{ URL::to('/')}}/image/close.png" alt="burger_menu"></button></li>
        </ul>
    </div>
    {{-- HIDDEN> --}}
    <div id="home_menu">
        <ul id="ul_menu">
            <li><img src="{{ URL::to('/')}}/image/logo.png" alt="OA_Logo" height="60px" width="90px"></li>
            <li id="About_OA"><a href="#">About OA</a></li>
            <li id="About_SP"><a href="#">About SP</a></li>
            <li id="Login"><a href="#"><span id="li_login">Login</span></a></li>
        </ul>
    </div>

    <div id="home_txt_head">
        <h1>Data to enrich your<br><span>offshore business</span></h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet, voluptas modi magni nobis vitae maxime voluptate tempore expedita magnam, corrupti aut tenetur esse perspiciatis delectus aliquid cum voluptates ipsam! Aliquam.</p>
    </div>

    <div id="home_buttons">
        <button class="hb_btn" id="btn_1">Get started</button>
        <button class="hb_btn" id="btn_2">View recent leads</button>
    </div>
    <div id="home_image"></div>
</body>
</html>
