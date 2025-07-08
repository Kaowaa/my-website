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
    <title>Login Page</title>
    
</head>
<style>
    *
body{
background-color:   #ffffff;
font-family: "Mitr", sans-serif;
font-optical-sizing: auto;
font-weight: 400;
font-style: normal;

}
.navbar-nav .nav-link:hover {
background-color:#86007f00;
color: white !important;
border-radius: 5px;
transition: background-color 0.3s ease;
}
.navbar{
background: #B500A0;
background: radial-gradient(circle, rgb(89, 100, 250) 0%, rgb(51, 186, 240) 100%);
}

#backToTopBtn {
display: none;
position: fixed;
bottom: 40px;
right: 30px;
z-index: 99;
font-size: 16px; 
border: none;
outline: none;
background-color: #a44fff;
color: white;
cursor: pointer;
padding: 10px 15px;
border-radius: 10px;
box-shadow: 2px 2px 5px rgba(0,0,0,0.3);

}
.footer {
background-color: #a44fff;
padding: 40px 20px;
color: white;
font-family: 'Arial', sans-serif;

}
.bron {
background-color: #a44fff;
padding: 40px 20px;
color: white;
font-family: 'Arial', sans-serif;

}
.footer-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  max-width: 1200px;
  margin: auto;
}

.footer-section {
  flex: 1 1 300px;
  margin: 20px;
}

.footer-section h3 {
  font-size: 18px;
  margin-bottom: 15px;
}

.footer-section ul {
  list-style: none;
  padding: 0;
}

.footer-section ul li {
  margin-bottom: 10px;
}

.footer-section ul li a {
  color: white;
  text-decoration: none;
}



#backToTopBtn:hover {
    background-color:#7a7a7a;
}


.flex-container {
  display: flex;
  justify-content: center;
}

.dropbtn {
  background-color: #4caf4f00;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #860080;
}

.halo-effect {
    transition: box-shadow 0.3s ease-in-out; 
    border-radius: 5px; 
}

.halo-effect:hover,
.halo-effect:focus {
    box-shadow: 0 0 10px 5px rgba(255, 255, 255, 0.5); 
    outline: none; 
}


.dropdown-menu .dropdown-item {
    transition: background-color 0.3s ease-in-out;
    color: #000000 !important; 
}

.dropdown-menu .dropdown-item:hover,
.dropdown-menu .dropdown-item:focus {
    background-color: rgba(255, 255, 255, 0.2);
    box-shadow: none;
}

.sidebar-menu {
  width: 250px;
  background-color: #f4f4f4;
  border-right: 1px solid #ccc;
  position: relative;
  font-family: Arial, sans-serif;
}

.menu {
  list-style: none;
  margin: 0;
  padding: 0;
}

.menu-item {
  position: relative;
  padding: 12px 20px;
  cursor: pointer;
  border-bottom: 1px solid #ddd;
}

.menu-item:hover {
  background-color: #e0e0e0;
}

.submenu {
  display: none;
  position: absolute;
  left: 250px;
  top: 0;
  width: 1600px;
  background-color: #ffffff;
  border: 1px solid #ccc;
  padding: 15px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.submenu ul {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 10px;
  list-style: none;
  margin: 0;
  padding: 0;
}

.submenu ul li {
  padding: 5px 0;
  font-size: 14px;
  color: #333;
  cursor: pointer;
}

.menu-item:hover .submenu {
  display: block;
}
.summary-item {
      display: flex;
      justify-content: space-between;
      margin-bottom: 8px;
    }
    .summary-box {
      width: 300px;
      border: 1px solid #ddd;
      padding: 20px;
      border-radius: 8px;
    }
    .summary-box h3 {
      margin-top: 0;
      margin-bottom: 16px;
    }

.cart-item {
    background-color:rgb(141, 141, 141);
    border-radius: 12px;
    
  }
  .btn-outline-danger {
    border-radius: 8px;
  }
  .btn-outline-secondary {
    border-radius: 8px;
    }

.img1{
        width: 80px; vertical-align: middle;
}

.checkout-steps {
  gap: 10px;
}

.step {
  padding: 8px 20px;
  border-radius: 25px;
  background-color:rgb(228, 247, 252);
  color:rgb(28, 121, 183);
  font-weight: bold;
  font-size: 14px;
  white-space: nowrap;
}

.step.active {
  background-color:rgb(0, 163, 213);
  color: white;
}

.step-line {
  width: 30px;
  height: 4px;
  background-color:rgb(154, 215, 239);
  border-radius: 10px;
  flex-shrink: 0;
  align-self: center;
}



</style>
<?php
$servername = "localhost";
$username = "root";
$password = "wwe123za";
$database = "potato";
$conn = mysqli_connect($servername, $username, $password ,$database,);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>

<body>
<nav class="navbar">
  <div class="container justify-content-center ">
      <a href="index.php"style="color :rgba(255, 255, 255, 0)"><img src="img/Primebyte logo1.png"  class="logo" alt="โลโก้" width="200" height="80;" class="center" style="backdrop-filter: blur(0px);"> </a>
  </div>
</nav>      
<nav class="navbar navbar-expand-lg bg-opacity-75 top-0 start-0 w-100 justify-content-center " style="z-index:100;backdrop-filter: blur(7px);">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style="color :#ffffff"></a>
        <div class="collapse navbar-collapse d-none d-lg-flex justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item me-3">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="ค้นหาสินค้า" aria-label ="Search"/>
                        <button class="btn btn-none halo-effect" type="submit"><i class="fa-solid fa-magnifying-glass fa-beat-fade" style="color: #ffffff;"></i></button>
                    </form>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link halo-effect" href="buy.php"  style="color : #ffffff">สินค้าทั้งหมด</a>
                </li>
                <li class="nav-item me-3">
                    </li>
                <li class="nav-item dropdown me-3">
                    <button class="btn btn-none dropdown-toggle halo-effect" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="color : #ffffff"><i class="fa-solid fa-bars" style="color: #ffffff;"></i> หมวดหมู่สินค้า</button>
                    <ul class="dropdown-menu">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">      
                                    <li><a class="dropdown-item" href="#" data-target="mo1"><i class="fa-solid fa-display" style="color: #000000;"></i> จอภาพ (Monitor)</a></li>
                                    <li><a class="dropdown-item" href="#" data-target="c1"><i class="fa-solid fa-mobile"></i> เคส (Case)</a></li>
                                    <li><a class="dropdown-item" href="#" data-target="p1"><i class="fa-solid fa-car-battery" style="color: #000000;"></i> พาวเวอร์ซัพพลาย (Power Supply)</a></li>
                                    <li><a class="dropdown-item" href="#" data-target="k1"><i class="fa-solid fa-keyboard" style="color: #000000;"></i> คีย์บอร์ด (Keyboard)</a></li>
                                    <li><a class="dropdown-item" href="#" data-target="mou1"><i class="fa-solid fa-computer-mouse" style="color: #000000;"></i> เมาส์ (Mouse)</a></li>
                                    <li><a class="dropdown-item" href="#" data-target="ma1"><i class="fa-solid fa-mobile-retro" style="color: #000000;"></i> เมนบอร์ด (Main board)</a></li>
                                    <li><a class="dropdown-item" href="#" data-target="cpu1"><i class="fa-solid fa-microchip" style="color: #000000;"></i> ซีพียู (CPU)</a></li>
                                    <li><a class="dropdown-item" href="#" data-target="d1"><i class="fa-solid fa-tachograph-digital" style="color: #000000;"></i> การ์ดแสดงผล (Display Card)</a></li>
                                    <li><a class="dropdown-item" href="#" data-target="r1"><i class="fa-solid fa-memory" style="color: #000000;"></i> แรม (RAM)</a></li>
                                    <li><a class="dropdown-item" href="#" data-target="h1"><i class="fa-solid fa-hard-drive" style="color: #000000;"></i> ฮาร์ดดิสก์ (Hard disk)</a></li>
                                </div>
                            </div> 
                        </div>
                    </ul>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link halo-effect" href="#" data-target="text4" style="color : #ffffff">คอมประกอบ</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link halo-effect" href="#" data-target="text3" style="color : #ffffff">โปรโมชั่นพิเศษ</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link halo-effect" href="#" data-target="text5" style="color : #ffffff">ตำแหน่งที่ตั้ง</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link halo-effect" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">              
                        <i class="fa-solid fa-bag-shopping fa-2xl" alt="cart" style="color: white;"></i>
                    </a>
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

  <div class="container">
    
      <div class="row g-2">
          <div class="col-sm-6 col-md-8">
            <div class="text-center">
              <div class="checkout-steps d-flex justify-content-center align-items-center my-4">
                <div class="step active">1. ตะกร้าสินค้า</div>
                <div class="step-line"></div>
                <div class="step">2. รายละเอียด</div>
                <div class="step-line"></div>
                <div class="step">3. ชำระเงิน</div>
            </div>
            </div>
            <br>
            <div class="">
              <div id="summary"></div> 
            </div>
          </div>
          <div class="col-6 col-md-4">  
            <br><br><br><br><br>
            <div class="summary-box">
              <div class="text-center">
                <h4>จำนวนเงินที่ต้องชำระ</h4>
              </div>
              <br>
              <div class="total" id="total"> </div>
              <br>
              <div class="d-grid gap-2">
                <button class="btn btn-success">ถัดไป</button>
              </div>  
              <br>
              <br>
            </div>
          </div>
      </div>
  </div>
<br><br>   
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

    const mybutton = document.getElementById("backToTopBtn2");

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

let cart = [];

function addToCart(name, price, img) {
  cart.push({ name, price, img });
  updateCart();
}
const urlParams = new URLSearchParams(window.location.search);
const cartData = urlParams.get("cart");

if (cartData) {
  const cart = JSON.parse(decodeURIComponent(cartData));
  let total = 0;
  const summaryDiv = document.getElementById("summary");
  cart.forEach(item => {
    total += item.price;
    const div = document.createElement("div");
    div.className = "item";
    div.innerHTML = `
<div class="card mb-3 shadow-sm border-0 rounded-4">
  <div class="row g-0 align-items-center">
    <div class="col-md-2 text-center p-2">
      <img src="img/${item.img}" class="img-fluid rounded-4" alt="CPU" style="max-width: 100px;">
    </div>
    <div class="col-md-7">
      <div class="card-body py-3">
        <h6 class="card-title m-0">${item.name}</h6>
      </div>
    </div>
    <div class="col-md-3 text-end pe-4">
      <div class="d-flex flex-column align-items-end gap-2 justify-content-center h-100">
        <!-- ราคาสินค้า -->
        <div class="text-danger fw-bold fs-5">${item.price}.-</div>
      </div>
    </div>
    
  </div>
</div>
`;


    summaryDiv.appendChild(div);
  });

  const vat = total * 0.03;
  const totalWithVat = total + vat;

  document.getElementById("total").innerHTML = `
  <div class="summary-item">
    <span>ค่าส่ง : </span>
    <span>฿0.00</span>
  </div>
  <div class="summary-item">
    <span>ราคาก่อนภาษี: </span>
    <span>฿${total.toFixed(2)}</span>
  </div>
  <div class="summary-item">
    <span>VAT 3%: </span>
    <span>฿${vat.toFixed(2)}</span>
  </div>
    <hr>
  <h5><div class="summary-item">
        <span>ยอดสุทธิ: </span>
        <span>฿${totalWithVat.toFixed(2)}</span>
      </div>
  </h5>
    ยอดรวม (รวมภาษีมูลค่าเพิ่ม)
  `;
}
  </script>
</body>
</html>
