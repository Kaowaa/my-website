<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400;500;600;700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link href="styleindex.css"rel="stylesheet">
    <title>HOME</title>
</head>

<body>
<nav class="navbar">
    <div class="container justify-content-center">
        <img src="img/Primebyte logo1.png" class="logo" alt="โลโก้" width="200" height="80;" class="center" style="backdrop-filter: blur(0px);">
    </div>
</nav>      
    <nav class="navbar navbar-expand-lg bg-opacity-75 top-0 start-0 w-100 justify-content-center" style="z-index:100;backdrop-filter: blur(7px);">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style="color :#ffffff"></a>

        <div class="collapse navbar-collapse d-none d-lg-flex justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item me-3">
                    <a class="nav-link halo-effect" href="buy.php" style="color : #ffffff">สินค้าทั้งหมด</a>
                </li>
                <li class="nav-item me-3">
                    </li>
                <li class="nav-item dropdown me-3">
                    <button class="btn btn-none dropdown-toggle halo-effect" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="color : #ffffff"><i class="fa-solid fa-bars" style="color: #ffffff;"></i> หมวดหมู่สินค้า</button>
                    <ul class="dropdown-menu">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <li><a class="dropdown-item" href="buy.php#mo1"><i class="fa-solid fa-display" style="color: #000000;"></i> จอภาพ (Monitor)</a></li>
                                    <li><a class="dropdown-item" href="buy.php#c1"><i class="fa-solid fa-mobile"></i> เคส (Case)</a></li>
                                    <li><a class="dropdown-item" href="buy.php#p1"><i class="fa-solid fa-car-battery" style="color: #000000;"></i> พาวเวอร์ซัพพลาย (Power Supply)</a></li>
                                    <li><a class="dropdown-item" href="buy.php#k1"><i class="fa-solid fa-keyboard" style="color: #000000;"></i> คีย์บอร์ด (Keyboard)</a></li>
                                    <li><a class="dropdown-item" href="buy.php#mou1"><i class="fa-solid fa-computer-mouse" style="color: #000000;"></i> เมาส์ (Mouse)</a></li>
                                    <li><a class="dropdown-item" href="buy.php#ma1"><i class="fa-solid fa-mobile-retro" style="color: #000000;"></i> เมนบอร์ด (Main board)</a></li>
                                    <li><a class="dropdown-item" href="buy.php#cpu1"><i class="fa-solid fa-microchip" style="color: #000000;"></i> ซีพียู (CPU)</a></li>
                                    <li><a class="dropdown-item" href="buy.php#d1"><i class="fa-solid fa-tachograph-digital" style="color: #000000;"></i> การ์ดแสดงผล (Display Card)</a></li>
                                    <li><a class="dropdown-item" href="buy.php#r1"><i class="fa-solid fa-memory" style="color: #000000;"></i> แรม (RAM)</a></li>
                                    <li><a class="dropdown-item" href="buy.php#h1"><i class="fa-solid fa-hard-drive" style="color: #000000;"></i> ฮาร์ดดิสก์ (Hard disk)</a></li>
                                </div>
                            </div>
                        </div>
                    </ul>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link halo-effect" href="#" data-target="text4" style="color : #ffffff">จัดสเปคคอม/ประกอบคอม</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link halo-effect" href="#" data-target="text3" style="color : #ffffff">โปรโมชั่นพิเศษ</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link halo-effect" href="#" data-target="text4" style="color : #ffffff">ตำแหน่งที่ตั้ง</a>
                </li>
                <li class="nav-item dropdown">
                    <button class="btn btn-none dropdown-toggle halo-effect" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="color : #ffffff">ชื่อผู้ใช้งาน <?=$_SESSION["login_fistname"]?></button>
                    <ul class="dropdown-menu dropdown-menu-nones">
                        <li><a class="dropdown-item" href="#">สลับบัญชี</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="login.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>



    <br>
    <div class="position-relative" style="z-index: index 99;">
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" >
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="img/โฆษณา1.png" class="d-block mx-auto" style="max-width: 65%; opacity:10;">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="img/โฆษณา2.png" class="d-block mx-auto" style="max-width: 65%; opacity:10;">
            </div>
            <div class="carousel-item">
                <img src="img/โฆษณา3.png" class="d-block mx-auto" style="max-width: 65%; opacity:10;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>   
    </div>
<button onclick="topFunction()" id="backToTopBtn" title="กลับขึ้นด้านบน">กลับขึ้นด้านบน⬆</button>
            <br>
            <br>
            <div class="container text-start">
                <div class="row row-cols-1 row-cols-md-12 g-1">         
                    <div class="col" id="text3"> 
                        <div class="card"style="border:none;">
                            <div class="card-body"style="color :rgb(0, 0, 0)">
                                <h1><p>โปรโมชั่นสุดพิเศษ</p></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container text-center">
                <hr></hr>
                <div class="row row-cols-12 row-cols-md- g-1">         
                    <div class="col" id="text1">
                        <div class="card-body" class="text-center" style="color : #000000"> 
                            <div class="card" style="width: 53.7rem;">
                                <img src="img/โฆษณา4.png" class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="col" id="text1">
                        <div class="card-body" class="text-center" style="color : #000000"> 
                            <div class="card" style="width: 26.8rem;">
                                <img src="img/โฆษณา4.png" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <div class="col" id="text1">
                            <div class="card-body" class="text-center" style="color : #000000"> 
                                <div class="card" style="width: 26.8rem;">
                                <img src="img/โฆษณา4.png" class="card-img-top" alt="...">  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container text-start">
                <div class="row row-cols-1 row-cols-md-12 g-1">         
                    <div class="col" id="text3"> 
                        <div class="card"style="border:none;">
                            <div class="card-body"style="color : #000000">
                                <h1><p>CPU</p></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container text-center">
                <div class="text-end">
                    <a class="icon-link icon-link-hover" style="--bs-link-hover-color-rgb: 255, 72, 240;" href="buy.php">
                        View All
                    </a>
                </div><hr></hr>
                <div class="row row-cols-4 row-cols-md- g-1">         
                    <div class="col  " id="text1">
                        <div class="card-body" class="text-center" style="color : #000000"> 
                            <div class="card mb-3 shadow p-3 border-0 rounded-4" style="width: 18rem;">
                                <img src="img/cpu1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-start">CPU AMD AM4 RYZEN 5 5600GT</h5>
                                    <hr></hr>
                                    <p class="card-text">3.6GHz up to 4.6GHz / 6Cores / 12Threads / AMD Radeon Graphics</p>
                                    <br><br><br>
                                </div>
                                <ul class="list-group list-group-flush ">
                                    <a href="buy.php#cpu1">
                                        <button type="button" class="btn btn-primary"><i class="fa-solid fa-cart-shopping fa-beat-fade" style="color: #ffffff;"></i> 4,390.-</button>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col" id="text1">
                        <div class="card-body" class="text-center" style="color : #000000"> 
                            <div class="card mb-3 shadow p-3 border-0 rounded-4" style="width: 18rem;">
                                <img src="img/cpu2.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-start">CPU AMD AM4 RYZEN 7 5700X</h5>
                                    <hr></hr>
                                    <p class="card-text">3.4GHz up to 4.6GHz / 8Cores / 16Threads / No Integrated Graphics / No CPU Cooler</p>
                                    <br><br> 
                                </div>
                                <ul class="list-group list-group-flush">
                                    <a href="buy.php#cpu1">
                                        <button type="button" class="btn btn-primary"><i class="fa-solid fa-cart-shopping fa-beat-fade" style="color: #ffffff;"></i> 6,690.-</button>
                                    </a>                                
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col" id="text1">
                        <div class="card-body" class="text-center" style="color : #000000"> 
                            <div class="card mb-3 shadow p-3 border-0 rounded-4" style="width: 18rem;">
                                <img src="img/cpu5.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-start">CPU INTEL CORE ULTRA 5 225F LGA 1851</h5>
                                    <hr></hr>
                                    <p class="card-text"> 3.30GHz up to N/A / 10Cores / 10Threads / Intel Graphics</p>
                                    <br> <br>  
                                </div>
                                <ul class="list-group list-group-flush">
                                    <a href="buy.php#cpu1">
                                        <button type="button" class="btn btn-primary"><i class="fa-solid fa-cart-shopping fa-beat-fade" style="color: #ffffff;"></i> 8,020.-</button>
                                    </a>                                
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col" id="text1">
                        <div class="card-body" class="text-center" style="color : #000000"> 
                            <div class="card mb-3 shadow p-3 border-0 rounded-4" style="width: 18rem;">
                                <img src="img/cpu6.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-start">CPU INTEL CORE ULTRA 7 265 LGA 1851</h5>
                                    <hr></hr>
                                    <p class="card-text">2.40GHz up to N/A / 20Cores / 20Threads / Intel Graphics</p>
                                    <br> <br><br>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <a href="buy.php#cpu1">
                                        <button type="button" class="btn btn-primary"><i class="fa-solid fa-cart-shopping fa-beat-fade" style="color: #ffffff;"></i> 10,890.-</button>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="container text-start">
                <div class="row row-cols-1 row-cols-md-12 g-1">         
                    <div class="col" id="text3"> 
                        <div class="card"style="border:none;">
                            <div class="card-body"style="color : #000000">
                                <h1><p>Graphic Card</p></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container text-center">
                <div class="text-end">
                    <a class="icon-link icon-link-hover" style="--bs-link-hover-color-rgb: 255, 72, 240;" href="buy.php">
                        View All
                    </a>
            </div><hr></hr>
                <div class="row row-cols-4 row-cols-md- g-1">         
                    <div class="col" id="text1">
                        <div class="card-body" class="text-center" style="color : #000000"> 
                            <div class="card mb-3 shadow p-3 border-0 rounded-4" style="width: 18rem;">
                                <img src="img/g1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-start">VGA ZOTAC GEFORCE RTX 3060 TWIN EDGE - 12GB GDDR6 LHR VERSION</h5>
                                    <hr></hr>
                                    <p class="card-text"> 12GB / GDDR6 / 192-bit / PCIe4.0 / 1xHDMI / 3xDp / 1xPower(8 Pin) / PSU Require 600w / VGA Length 224mm / 2xFanCooling</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <a href="buy.php#d1">
                                        <button type="button" class="btn btn-primary"><i class="fa-solid fa-cart-shopping fa-beat-fade" style="color: #ffffff;"></i> 9,390.-</button>
                                    </a>                                
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col" id="text1">
                        <div class="card-body" class="text-center" style="color : #000000"> 
                            <div class="card mb-3 shadow p-3 border-0 rounded-4" style="width: 18rem;">
                                <img src="img/g2.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-start">VGA MSI GEFORCE RTX 5060 GAMING TRIO OC - 8GB GDDR7</h5>
                                    <hr></hr>
                                    <p class="card-text">8GB GDDR7 8GB / GDDR7 / 128-bit / PCIe5.0 / 1xHDMI / 3xDp / 1xPower(8 pin) / PSU Require 550w / VGA Length 300mm /3xFanCooling</p>
                                </div>
                                <br>
                                <ul class="list-group list-group-flush">
                                    <a href="buy.php#d1">
                                        <button type="button" class="btn btn-primary"><i class="fa-solid fa-cart-shopping fa-beat-fade" style="color: #ffffff;"></i> 14,200.-</button>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col" id="text1">
                        <div class="card-body" class="text-center" style="color : #000000"> 
                            <div class="card mb-3 shadow p-3 border-0 rounded-4" style="width: 18rem;">
                                <img src="img/g5.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-start">VGA ASROCK RADEON RX 9070XT TAICHI OC - 16GB GDDR6</h5>
                                    <hr></hr>
                                    <p class="card-text">16GB GDDR6 16GB / GDDR6 / 256-bit / PCIe5.0 / 1xHDMI / 3xDp / 1xPower(12VHPWR) / PSU Require 850w / VGA Length 330mm / 3xFanCooling</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <a href="buy.php#d1">
                                        <button type="button" class="btn btn-primary"><i class="fa-solid fa-cart-shopping fa-beat-fade" style="color: #ffffff;"></i> 29,990.-</button>
                                    </a>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col" id="text1">
                        <div class="card-body" class="text-center" style="color : #000000"> 
                            <div class="card mb-3 shadow p-3 border-0 rounded-4" style="width: 18rem;">
                                <img src="img/g6.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-start">VGA GIGABYTE RADEON RX 7700XT GAMING OC - 12GB GDDR6</h5>
                                    <hr></hr>
                                    <p class="card-text">12GB / GDDR6 / 192-bit / PCIe4.0 / 2xHDMI / 2xDp / 2xPower(8pin) / PSU Require 700w / VGA Length 302mm / 3xFanCooling</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <a href="buy.php#d1">
                                        <button type="button" class="btn btn-primary"><i class="fa-solid fa-cart-shopping fa-beat-fade" style="color: #ffffff;"></i> 16,700.-</button>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
<br>
            <div class="container text-start">
                <div class="row row-cols-1 row-cols-md-12 g-1">         
                    <div class="col" id="text3"> 
                        <div class="card"style="border:none;">
                            <div class="card-body"style="color : #000000">
                                <h1><p>MONITOR</p></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container text-center">
                <div class="text-end">
                    <a class="icon-link icon-link-hover" style="--bs-link-hover-color-rgb: 255, 72, 240;" href="buy.php">
                        View All
                    </a>
            </div><hr></hr>
                <div class="row row-cols-4 row-cols-md- g-1">         
                    <div class="col" id="text1">
                        <div class="card-body" class="text-center" style="color : #000000"> 
                            <div class="card mb-3 shadow p-3 border-0 rounded-4" style="width: 18rem;">
                                <img src="img/MONITOR 21.45'' MSI PRO MP223 E2 (VA, HDMI, DP) 100Hz.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-start">MONITOR 21.45'' MSI PRO MP223 E2 (VA, HDMI, DP) 100Hz</h5>
                                    <hr></hr>
                                    <p class="card-text">VA / 1920 x 1080 / CR 3000:1 / 250cd:m2 / 1ms / 100Hz / 99% sRGB / 16.7 Million / Aspect Ratio</p>
                                </div>
                                <br><br>
                                <ul class="list-group list-group-flush">
                                    <a href="buy.php#mo1">
                                        <button type="button" class="btn btn-primary"><i class="fa-solid fa-cart-shopping fa-beat-fade" style="color: #ffffff;"></i> 2,050.-</button>
                                    </a>                                
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col" id="text1">
                        <div class="card-body" class="text-center" style="color : #000000"> 
                            <div class="card mb-3 shadow p-3 border-0 rounded-4" style="width: 18rem;">
                                <img src="img/MONITOR 21.5'' DAHUA LM22-A200Y (VA, VGA, HDMI) 100Hz.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-start">MONITOR 21.5'' DAHUA LM22-A200Y (VA, VGA, HDMI) 100Hz</h5>
                                    <hr></hr>
                                    <p class="card-text">VA / 1,920 x 1,080 / 3000:1 / 250cd:m2 / 10 ms / 100Hz / 16.7 Million / Aspect Ratio</p>
                                </div>
                                <br>
                                <br>
                                <ul class="list-group list-group-flush">
                                    <a href="buy.php#mo1">
                                        <button type="button" class="btn btn-primary"><i class="fa-solid fa-cart-shopping fa-beat-fade" style="color: #ffffff;"></i> 1,900.-</button>
                                    </a>                                
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col" id="text1">
                        <div class="card-body" class="text-center" style="color : #000000"> 
                            <div class="card mb-3 shadow p-3 border-0 rounded-4" style="width: 18rem;">
                                <img src="img/MONITOR 24'' SAMSUNG LS24F320GAEXXT (IPS, HDMI) 120Hz.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-start">MONITOR 24'' SAMSUNG LS24F320GAEXXT (IPS, HDMI) 120Hz</h5>
                                    <hr></hr>
                                    <p class="card-text"> IPS / 1920 x 1080 / 1000:1 / 250cd:m2 / 5ms / 120Hz / 72 NTSC / 16.7 Million / Aspect Ratio 16:9 </p>
                                </div>
                                <br>
                                <ul class="list-group list-group-flush">
                                    <a href="buy.php#mo1">
                                        <button type="button" class="btn btn-primary"><i class="fa-solid fa-cart-shopping fa-beat-fade" style="color: #ffffff;"></i> 2,990.-</button>
                                    </a>                                
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col" id="text1">
                        <div class="card-body" class="text-center" style="color : #000000"> 
                            <div class="card mb-3 shadow p-3 border-0 rounded-4" style="width: 18rem;">
                                <img src="img/MONITOR 23.8'' ASUS PROART PA24ACRV (IPS, DP, HDMI, USB-C, SPK) 2K 75Hz.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-start">MONITOR 23.8'' ASUS PROART PA24ACRV (IPS, DP, HDMI, USB-C, SPK) 2K 75Hz</h5>
                                    <hr></hr>
                                    <p class="card-text">IPS / 1920 x 1080 / 1000:1 / 250cd:m2 / 5ms / 120Hz / 72 NTSC / 16.7 Million / Aspect Ratio</p>
                                </div><br>
                                <ul class="list-group list-group-flush">
                                    <a href="buy.php#mo1">
                                        <button type="button" class="btn btn-primary"><i class="fa-solid fa-cart-shopping fa-beat-fade" style="color: #ffffff;"></i> 11,990.-</button>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<br>
<br>
<br>
<br>
<br>
<br>
<nav class="navbar" id="text4">
    <div class="container justify-content-center">
        <img src="img/Primebyte logo1.png" class="logo" alt="โลโก้" width="200" height="80;" class="center" style="backdrop-filter: blur(0px);">
    </div>
</nav>  
<footer class="foter">
  <div class="footer-container">
    <!-- Hotel Info -->
    <div class="footer-section"style="color : #000000">
      <h3>Primebyte</h3>
      <ul >
        <li><a href="https://www.google.com/maps/place/%E0%B8%AB%E0%B8%A1%E0%B8%B9%E0%B9%88%E0%B8%9A%E0%B9%89%E0%B8%B2%E0%B8%99%E0%B8%9E%E0%B8%A4%E0%B8%81%E0%B8%A9%E0%B8%B232+%E0%B8%A5%E0%B8%B3%E0%B8%A5%E0%B8%B9%E0%B8%81%E0%B8%81%E0%B8%B2+2+%E0%B8%95%E0%B8%B3%E0%B8%9A%E0%B8%A5+%E0%B8%9A%E0%B8%B6%E0%B8%87%E0%B8%84%E0%B8%B3%E0%B8%9E%E0%B8%A3%E0%B9%89%E0%B8%AD%E0%B8%A2+%E0%B8%AD%E0%B8%B3%E0%B9%80%E0%B8%A0%E0%B8%AD%E0%B8%A5%E0%B8%B3%E0%B8%A5%E0%B8%B9%E0%B8%81%E0%B8%81%E0%B8%B2+%E0%B8%9B%E0%B8%97%E0%B8%B8%E0%B8%A1%E0%B8%98%E0%B8%B2%E0%B8%99%E0%B8%B5+12150/@13.9514551,100.7248478,17z/data=!3m1!4b1!4m6!3m5!1s0x311d7be1709a84c1:0x39e7954d718cfb5d!8m2!3d13.9514499!4d100.7274227!16s%2Fg%2F12hnrxgc1?authuser=0&entry=ttu&g_ep=EgoyMDI1MDUyOC4wIKXMDSoASAFQAw%3D%3D" style="color : #000000"><p>หมู่บ้านพฤกษา32 ลำลูกกา 2 ตำบล บึงคำพร้อย อำเภอลำลูกกา ปทุมธานี 12150<br><br></a></li>
      </ul>
        
      </p>
    </div>

    <!-- Navigation Menu -->
    <div class="footer-section"style="color : #000000">
      <h3>Menu</h3>
      <ul>
        <li><a href="https://www.facebook.com/thawatchai.kongkaewgarian/?locale=th_TH"style="color : #000000">Facebook : Thawatchai Kongkaewgarian</a></li>
        <li><a href="https://www.facebook.com/thawatchai.kongkaewgarian/?locale=th_TH"style="color : #000000">Gmail : Tkuchannel2@gmail.com</a></li>
        <span>📞 <a href="tel:0637527607" style="color : #000000">0637527607</a></span>
      </ul>
    </div>
</footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
<script>
    document.querySelectorAll('a[data-target]').forEach(link => {
    link.addEventListener('click', function (e) {
    e.preventDefault();
    const targetId = this.getAttribute('data-target');
    const targetElement = document.getElementById(targetId);
    if (targetElement) {
        window.scrollTo({
        top: targetElement.offsetTop - 70,
        behavior: 'smooth'
        });
    }
    });
});

    const mybutton = document.getElementById("backToTopBtn");

    window.onscroll = function() {
      if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    };

    
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
</script>
</body>
</html>
