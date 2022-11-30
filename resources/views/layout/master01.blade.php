<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('home')</title>
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
    <h1>CONTROLLER CRANE DENGAN JOYSTICK DAN IR REMOTE BERBASIS ARDUINO UNO</h1>
    <p>Cara kerja dari controller yaitu Ketika sistem dimulai diberikan sumber daya dari adaptor 9V indicator LED pada box akan menyala. User menggerakan joystick dan menekan tombol pada IR Remote yang diteruskan ke IR reciver. Pembacaan nilai dari joystick dan IR remote akan dikirimkan ke Arduino UNO untuk diproses. Arduino UNO memproses nilai dari Joystick dan IR remote, selanjutnya akan mengirim data atau sinyal menuju Motor Servo. Pada motor Servo bergerak sesuai nilai yang diterima dari Joystick dan IR remote. ServoX bergerak ke atas dan ke bawah, ServoY bergerak ke kanan dan kekiri, ServoZ bergerak menarik dan memanjangakan tali crane.</p>
    <p>Berikut desain dari alat Controller Crane : </p>
    <img src="image/a.jpg" alt="" width="650" height="400">
</body>
</html>