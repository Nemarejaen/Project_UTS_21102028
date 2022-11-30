<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('skema')</title>
    <style>
        body{
    background-image: url(https://img.freepik.com/free-vector/gradient-metaverse-illustration_23-2149282137.jpg?w=1060&t=st=1669543861~exp=1669544461~hmac=71c1c25a2537c0ab389564640df3fa100e67d5776b6c400932e60bc23ae32ee9);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;

}
.container{
    text-align: left;
    color: #fafafa;
    margin-bottom: 30px;
    text-transform: uppercase;
    border-bottom: 4px solid #2979ff;
}
.mn ul{
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: black;
}
.mn li{
    display: inline;
    float: left;
}
.mn a{
    display: block;
    padding: 8px;
    text-decoration: none;
    color: white;
}
.mn li a:hover{
    color: purple;
}
h1{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    color: white;
    font-size: 50px;
}
p{
    color: white;
    font-size: 25px;
    
}
li{
    color: white;
    font-size: 30px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
h4{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 30px;
}
    </style>
</head>
<body>
<div class="container mn">
    <ul>
        <li><a href="/belajar-web/public">Beranda</a></li>
        <li><a href="/belajar-web/public/alat">Alat dan Bahan</a></li>
        <li><a href="/belajar-web/public/skematik">Rangkaian Skematik</a></li>
        <li><a href="/belajar-web/public/code">Code</a></li>
    </ul>
</div>
    <div class="main">
    <h1>Rancangan Skematik</h1>
    <img src="image/skema.png" width="901" height="660" alt=""/>
    </div>
    <div>
        <h4>Penemapatan PIN Joystick</h4>
        <p>Gnd = Gnd</p>
        <p>+5v = 5v</p>
        <p>VRx = A0</p>
        <p>VRy = A1</p>
        <p>SW = D0</p>
    </div>
    <div>
        <h4>Penemapatan PIN IR Reciver</h4>
        <p>Gnd = Gnd</p>
        <p>Vcc = 5v</p>
        <p>S = D8</p>
    </div>
    <div>
        <h4>Penemapatan PIN LED</h4>
        <p>Gnd = Gnd</p>
        <p>Vcc = D13</p>
    </div>
    <div>
        <h4>Penemapatan PIN ServoX</h4>
        <p>Brown = Gnd</p>
        <p>Red = 5v</p>
        <p>Orange = D6</p>
    </div>
    <div>
        <h4>Penemapatan PIN ServoY</h4>
        <p>Brown = Gnd</p>
        <p>Red = 5v</p>
        <p>Orange = D9</p>
    </div>
    <div>
        <h4>Penemapatan PIN ServoZ</h4>
        <p>Brown = Gnd</p>
        <p>Red = 5v</p>
        <p>Orange = D10</p>
    </div>
</body>
</html>