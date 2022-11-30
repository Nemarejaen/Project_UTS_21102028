<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('alat')</title>
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
    <div>
        <h1>Alat dan Bahan yang digunakan</h1>
        <ul>
            <li>Arduino UNO R3</li>
            <p>Arduino Uno R3 merupakan sebuah board mikrokontroller yang didasarkan pada ATmega328 yang mempunyai kapasitas penyimpanan 32 kb. Board Arduino uno bekerja pada tegangan 5 –12 Volts. Arduino UNO memiliki 20 pin Input/Output yang terdiri dari 14 pin digital dan 6 pin input analog. Arduino uno memuat semua yang dibutuhkan untuk menunjang mikrokontroler, sangat mudah menghubungkannya kesebuah computer dengan sebuah kabel USB, atau mensuplainya dengan sebuah adaptor AC (Alternating Current) ke DC (Direct Current) atau menggunakan baterai untuk menjalankannya. ATmega328 pada arduino uno hadir dengan sebuah bootloader yang memungkinkan untuk meng-uploadkode baru ke ATmega328 tanpa menggunakan program hardware eksternal.</p>            
            <p>Spesifikasi :</p>
            <p>1. Mikrokontroler 	    :Atmega328</p>
            <p>2. Operasi tegangan	    :5V </p>
            <p>3. Input tegangan 	    :7-12V </p>
            <p>4. Digital I/O 		    :14 (6 PWM output)</p>
            <p>5. Analog Input 	        :6 </p>
            <p>6. Arus DC tiap pin I/O	:50 </p>
            <p>7. Memori flash 	        : 32 KB </p>
            <p>8. SRAM		            : 2 KB (Atmega328)</p>
            <img src="image/arduino.jpg" width="300" height="250" alt=""/> 

            <li>Joystick</li>
            <p>Joystick Dual Axis KY-023 terdiri dari 2 potensiometer biaksial untuk mengontrol sumbu X dan Y dan 1 buah button.
            Saat ditekan ke bawah, itu mengaktifkan button. Modul ini terdiri dari dua potensiometer 10kΩ yang ditempatkan secara tegak lurus untuk mengontrol sumbu X dan Y dengan mengubah resistansi saat menggerakkan joystick.</p>            
            <p>Spesifikasi :</p>
            <p>Tegangan 	: 3.3V – 5V</p>
            <p>Dimensi 		: 2.6cm x 3.4cm</p>
            <p>Pin 			: 5 pin terdiri dari (Gnd, +5v, VRx, VRy, SW)</p>
            <img src="image/Joystick.jpg" width="300" height="250" alt=""/>
            
            <li>IR Reciver</li>
            <p>Inframerah adalah bentuk cahaya yang mirip dengan cahaya yang biasa kita lihat, satu satunya perbedaan antara cahaya Inframerah dan cahaya biasa adalah frekuensi dan panjang gelombang.
                Cahaya inframerah terletak di luar jangkauan sehingga manusia tidak dapat melihatnya. Karena inframerah adalah jenis cahaya komunikasi yang digunakan memerulkan garis pandang lurus atau tidak dapat ditransmisikan melalui dinding atau bahan lain.</p>            
            <p>Spesifikasi :</p>
            <p>Tegangan		: 2,7 – 5,5 V</p>
            <p>Jarak penerima	: 18 M</p>
            <p>Frekuensi		: 37,9 KHz</p>
            <p>Sudut baca		: ±45º</p>
            <img src="image/IR.jpg" width="300" height="250" alt=""/>
        
            <li>Servo</li>
            <p>Motor Servo adalah sebuah aktuator putar yang dirancang dengan sistem kontrol umpan balik tertutup. Motor servo dapat diatur untuk menentukan dan memastikan posisi sudut dari poros keluaran motor.
                Motor servo merupakan motor yang berputar lambat, dimana biasanya ditunjukkan oleh putarannya yang lambat.
                Namun demikian memiliki torsi yang kuat karena internal Motor tersebut akan bekerja sesuai dengan masukan data yang diterima.</p>
            <p>Spesifikasi :</p>
            <p>Berat		: 9g(SG90)</p>        
            <p>Dimensi	 	: 22.2 x 11.8 x 31 mm (SG90)</p>
            <p>Voltase pengoprasian	: 5V</p>
            <p>Rotasi		: 0o - 180o</p>
            <img src="image/servo.jpg" width="300" height="250" alt=""/>

            <li>LED</li>
            <p>LED (Light Emitting Diode) merupakan salah satu komponen elektronika yang mengubah energi listrik menjadi energi cahaya. Komponen ini termasuk golongan keluarga dioda dikarenan bahan dasarnya terbuat dari bahan semikonduktor.</p>
            <img src="image/led.jpg" width="300" height="250" alt="">
            
            <li>Jumper</li>
            <p>Digunakan untuk menghubungkan Arduino dengan sensor</p>           
            <img src="image/jumper.jpg" width="300" height="250" alt=""/>  

            <li>Adaptor</li>
            <p>Sebagai catu daya untuk arduino</p>            
            <img src="image/adaptor.jpeg" width="300" height="250" alt=""/>  

            <li>USB</li>
            <p>Untuk mentransfer data program dari Arduiono IDE ke Arduino UNO</p>          
            <img src="image/Usb.jpg" width="300" height="250" alt=""/>
        </ul>
    </div>
</body>
</html>