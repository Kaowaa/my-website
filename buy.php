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
    <link href="stylebuy.css" rel="stylesheet">
    <title>Login Page</title>
</head>
<style>
    .img1{
        width: 80px; vertical-align: middle;
    }
    .cart-item {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 10px;
    }
    .cart-item img {
        border-radius: 5px;
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
<nav class="navbar navbar-expand-lg bg-opacity-75 w-100 justify-content-center fixed-top " style="z-index:100;backdrop-filter: blur(7px);">
    <div class="container-fluid">
        <a href="index.php" style="color :rgba(255, 255, 255, 0)"><img src="img/Primebyte logo1.png"  class="logo" alt="โลโก้" width="200" height="80;" class="center" style="backdrop-filter: blur(0px);"> </a>
        <br>
        <div class="collapse navbar-collapse d-none d-lg-flex justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item me-3">
                    <a class="nav-link halo-effect" href="#"  style="color : #ffffff">สินค้าทั้งหมด</a>
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
                    <a class="nav-link halo-effect" href="sell.php" data-target="text4" style="color : #ffffff">จัดสเปคคอม/ประกอบคอม</a>
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
                        <span class="position-absolute top-45 start-90 translate-middle badge rounded-pill bg-danger" id="cart-count" >
                            0
                            <span class="visually-hidden ">unread messages</span>
                        </span>
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
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">ตระกร้าของคุณ </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
            <a href="buy copy.php"></a>
        </button>
    </div>
    <div class="offcanvas-body">
        <div id="cart"></div>
        <h5 class="offcanvas-title" id="off_label">   
        <h5 id="total"> ราคารวม: 0 บาท</h5>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button onclick="checkout()" type="button" class="btn btn-success">ไปหน้าชำระเงิน</button>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<div class="container ">
    <div class="text-start">
        <h3><i class="fa-solid fa-computer" style="color: #000000;"></i> เซ็ตคอมประกอบสำเร็จรูป</h3>
        <hr></hr>
    </div>
    <div class="row row-cols-1 row-cols-md-4 g-2">
        <?php
        $sql_set_pc = "SELECT * FROM product WHERE product_type = '11'";
        $result_set_pc = mysqli_query($conn, $sql_set_pc);
        while ($row_set_pc = mysqli_fetch_array($result_set_pc)) {
        ?>
            <div class="col">
                <div class="card mb-3 shadow-sm border-0 rounded-4">
                    <img src="img/<?= htmlspecialchars($row_set_pc['product_type_img']); ?>" class="card-img-top" alt="<?= htmlspecialchars($row_set_pc['product_type_name']); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($row_set_pc['product_type_name']); ?></h5>
                        <hr>
                        <p class="card-text"><?= htmlspecialchars($row_set_pc['product_type_name_eng']); ?></p>
                    </div>
                    <div class="card-footer">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button onclick="addToCart('<?= htmlspecialchars($row_set_pc['product_type_name']); ?>', <?= htmlspecialchars($row_set_pc['product_type_price']); ?>, '<?= htmlspecialchars($row_set_pc['product_type_img']); ?>')" class="btn btn-primary" type="button">
                                <i class="fa-solid fa-cart-shopping fa-beat-fade"> </i> <?= number_format($row_set_pc['product_type_price']); ?> .-
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <br><br>

    <button class="backToTop" onclick="topFunction()" id="backToTopBtn2" title="กลับขึ้นด้านบน">กลับขึ้นด้านบน⬆</button>

    <div class="text-start" id="mo1">
        <h3><i class="fa-solid fa-display" style="color: #000000;"></i> จอภาพ (Monitor)</h3>
        <hr>
    </div>
    <div class="row row-cols-1 row-cols-md-4 g-2">
        <?php
        $sql_monitor = "SELECT * FROM product WHERE product_type = '1'";
        $result_monitor = mysqli_query($conn, $sql_monitor);
        while ($row_monitor = mysqli_fetch_array($result_monitor)) {
        ?>
            <div class="col">
                <div class="card mb-3 shadow-sm border-0 rounded-4">
                    <img src="img/<?= htmlspecialchars($row_monitor['product_type_img']); ?>" class="card-img-top" alt="<?= htmlspecialchars($row_monitor['product_type_name']); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($row_monitor['product_type_name']); ?></h5>
                        <hr>
                        <p class="card-text"><?= htmlspecialchars($row_monitor['product_type_name_eng']); ?></p>
                    </div>
                    <div class="card-footer">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button onclick="addToCart('<?= htmlspecialchars($row_monitor['product_type_name']); ?>', <?= htmlspecialchars($row_monitor['product_type_price']); ?>, '<?= htmlspecialchars($row_monitor['product_type_img']); ?>')" class="btn btn-primary" type="button">
                                <i class="fa-solid fa-cart-shopping fa-beat-fade"> </i> <?= number_format($row_monitor['product_type_price']); ?> .-
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <br><br>

    <div class="text-start" id="c1">
        <h3><i class="fa-solid fa-mobile"></i> เคส (Case)</h3>
        <hr>
    </div>
    <div class="row row-cols-1 row-cols-md-4 g-2">
        <?php
        $sql_case = "SELECT * FROM product WHERE product_type = '2'";
        $result_case = mysqli_query($conn, $sql_case);
        while ($row_case = mysqli_fetch_array($result_case)) {
        ?>
            <div class="col">
                <div class="card mb-3 shadow-sm border-0 rounded-4">
                    <img src="img/<?= htmlspecialchars($row_case['product_type_img']); ?>" class="card-img-top" alt="<?= htmlspecialchars($row_case['product_type_name']); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($row_case['product_type_name']); ?></h5>
                        <hr>
                        <p class="card-text"><?= htmlspecialchars($row_case['product_type_name_eng']); ?></p>
                    </div>
                    <div class="card-footer">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button onclick="addToCart('<?= htmlspecialchars($row_case['product_type_name']); ?>', <?= htmlspecialchars($row_case['product_type_price']); ?>, '<?= htmlspecialchars($row_case['product_type_img']); ?>')" class="btn btn-primary" type="button">
                                <i class="fa-solid fa-cart-shopping fa-beat-fade"> </i> <?= number_format($row_case['product_type_price']); ?> .-
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div><br><br>

    <div class="text-start" id="p1">
        <h3><i class="fa-solid fa-car-battery" style="color: #000000;"></i> พาวเวอร์ซัพพลาย (Power Supply)</h3>
        <hr>
    </div>
    <div class="row row-cols-1 row-cols-md-4 g-2">
        <?php
        $sql_psu = "SELECT * FROM product WHERE product_type = '3'";
        $result_psu = mysqli_query($conn, $sql_psu);
        while ($row_psu = mysqli_fetch_array($result_psu)) {
        ?>
            <div class="col">
                <div class="card mb-3 shadow-sm border-0 rounded-4">
                    <img src="img/<?= htmlspecialchars($row_psu['product_type_img']); ?>" class="card-img-top" alt="<?= htmlspecialchars($row_psu['product_type_name']); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($row_psu['product_type_name']); ?></h5>
                        <hr>
                        <p class="card-text"><?= htmlspecialchars($row_psu['product_type_name_eng']); ?></p>
                    </div>
                    <div class="card-footer">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button onclick="addToCart('<?= htmlspecialchars($row_psu['product_type_name']); ?>', <?= htmlspecialchars($row_psu['product_type_price']); ?>, '<?= htmlspecialchars($row_psu['product_type_img']); ?>')" class="btn btn-primary" type="button">
                                <i class="fa-solid fa-cart-shopping fa-beat-fade"> </i> <?= number_format($row_psu['product_type_price']); ?> .-
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <br><br>

    <div class="text-start" id="k1">
        <h3><i class="fa-solid fa-keyboard" style="color: #000000;"></i> คีย์บอร์ด (Keyboard)</h3>
        <hr>
    </div>
    <div class="row row-cols-1 row-cols-md-4 g-2">
        <?php
        $sql_keyboard = "SELECT * FROM product WHERE product_type = '6'";
        $result_keyboard = mysqli_query($conn, $sql_keyboard);
        while ($row_keyboard = mysqli_fetch_array($result_keyboard)) {
        ?>
            <div class="col">
                <div class="card mb-3 shadow-sm border-0 rounded-4">
                    <img src="img/<?= htmlspecialchars($row_keyboard['product_type_img']); ?>" class="card-img-top" alt="<?= htmlspecialchars($row_keyboard['product_type_name']); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($row_keyboard['product_type_name']); ?></h5>
                        <hr>
                        <p class="card-text"><?= htmlspecialchars($row_keyboard['product_type_name_eng']); ?></p>
                    </div>
                    <div class="card-footer">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button onclick="addToCart('<?= htmlspecialchars($row_keyboard['product_type_name']); ?>', <?= htmlspecialchars($row_keyboard['product_type_price']); ?>, '<?= htmlspecialchars($row_keyboard['product_type_img']); ?>')" class="btn btn-primary" type="button">
                                <i class="fa-solid fa-cart-shopping fa-beat-fade"> </i> <?= number_format($row_keyboard['product_type_price']); ?> .-
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <br><br>

    <div class="text-start" id="mou1">
        <h3><i class="fa-solid fa-computer-mouse" style="color: #000000;"></i> เมาส์ (Mouse)</h3>
        <hr>
    </div>
    <div class="row row-cols-1 row-cols-md-4 g-2">
        <?php
        $sql_mouse = "SELECT * FROM product WHERE product_type = '7'";
        $result_mouse = mysqli_query($conn, $sql_mouse);
        while ($row_mouse = mysqli_fetch_array($result_mouse)) {
        ?>
            <div class="col">
                <div class="card mb-3 shadow-sm border-0 rounded-4">
                    <img src="img/<?= htmlspecialchars($row_mouse['product_type_img']); ?>" class="card-img-top" alt="<?= htmlspecialchars($row_mouse['product_type_name']); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($row_mouse['product_type_name']); ?></h5>
                        <hr>
                        <p class="card-text"><?= htmlspecialchars($row_mouse['product_type_name_eng']); ?></p>
                    </div>
                    <div class="card-footer">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button onclick="addToCart('<?= htmlspecialchars($row_mouse['product_type_name']); ?>', <?= htmlspecialchars($row_mouse['product_type_price']); ?>, '<?= htmlspecialchars($row_mouse['product_type_img']); ?>')" class="btn btn-primary" type="button">
                                <i class="fa-solid fa-cart-shopping fa-beat-fade"> </i> <?= number_format($row_mouse['product_type_price']); ?> .-
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <br><br>

    <div class="text-start" id="ma1">
        <h3><i class="fa-solid fa-mobile-retro" style="color: #000000;"></i> เมนบอร์ด (Main board)</h3>
        <hr>
    </div>
    <div class="row row-cols-1 row-cols-md-4 g-2">
        <?php
        $sql_mainboard = "SELECT * FROM product WHERE product_type = '8'";
        $result_mainboard = mysqli_query($conn, $sql_mainboard);
        while ($row_mainboard = mysqli_fetch_array($result_mainboard)) {
        ?>
            <div class="col">
                <div class="card mb-3 shadow-sm border-0 rounded-4">
                    <img src="img/<?= htmlspecialchars($row_mainboard['product_type_img']); ?>" class="card-img-top" alt="<?= htmlspecialchars($row_mainboard['product_type_name']); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($row_mainboard['product_type_name']); ?></h5>
                        <hr>
                        <p class="card-text"><?= htmlspecialchars($row_mainboard['product_type_name_eng']); ?></p>
                    </div>
                    <div class="card-footer">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button onclick="addToCart('<?= htmlspecialchars($row_mainboard['product_type_name']); ?>', <?= htmlspecialchars($row_mainboard['product_type_price']); ?>, '<?= htmlspecialchars($row_mainboard['product_type_img']); ?>')" class="btn btn-primary" type="button">
                                <i class="fa-solid fa-cart-shopping fa-beat-fade"> </i> <?= number_format($row_mainboard['product_type_price']); ?> .-
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <br><br>

    <div class="text-start" id="cpu1">
        <h3><i class="fa-solid fa-microchip" style="color: #000000;"></i> ซีพียู (CPU)</h3>
        <hr>
    </div>
    <div class="row row-cols-1 row-cols-md-4 g-2">
        <?php
        $sql_cpu = "SELECT * FROM product WHERE product_type = '4'";
        $result_cpu = mysqli_query($conn, $sql_cpu);
        while ($row_cpu = mysqli_fetch_array($result_cpu)) {
        ?>
            <div class="col">
                <div class="card mb-3 shadow-sm border-0 rounded-4">
                    <img src="img/<?= htmlspecialchars($row_cpu['product_type_img']); ?>" class="card-img-top" alt="<?= htmlspecialchars($row_cpu['product_type_name']); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($row_cpu['product_type_name']); ?></h5>
                        <hr>
                        <p class="card-text"><?= htmlspecialchars($row_cpu['product_type_name_eng']); ?></p>
                    </div>
                    <div class="card-footer">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button onclick="addToCart('<?= htmlspecialchars($row_cpu['product_type_name']); ?>', <?= htmlspecialchars($row_cpu['product_type_price']); ?>, '<?= htmlspecialchars($row_cpu['product_type_img']); ?>')" class="btn btn-primary" type="button">
                                <i class="fa-solid fa-cart-shopping fa-beat-fade"> </i> <?= number_format($row_cpu['product_type_price']); ?> .-
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <br><br>

    <div class="text-start" id="d1">
        <h3><i class="fa-solid fa-tachograph-digital" style="color: #000000;"></i> การ์ดแสดงผล (Display Card)</h3>
        <hr>
    </div>
    <div class="row row-cols-1 row-cols-md-4 g-2">
        <?php
        $sql_display_card = "SELECT * FROM product WHERE product_type = '5'";
        $result_display_card = mysqli_query($conn, $sql_display_card);
        while ($row_display_card = mysqli_fetch_array($result_display_card)) {
        ?>
            <div class="col">
                <div class="card mb-3 shadow-sm border-0 rounded-4">
                    <img src="img/<?= htmlspecialchars($row_display_card['product_type_img']); ?>" class="card-img-top" alt="<?= htmlspecialchars($row_display_card['product_type_name']); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($row_display_card['product_type_name']); ?></h5>
                        <hr>
                        <p class="card-text"><?= htmlspecialchars($row_display_card['product_type_name_eng']); ?></p>
                    </div>
                    <div class="card-footer">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button onclick="addToCart('<?= htmlspecialchars($row_display_card['product_type_name']); ?>', <?= htmlspecialchars($row_display_card['product_type_price']); ?>, '<?= htmlspecialchars($row_display_card['product_type_img']); ?>')" class="btn btn-primary" type="button">
                                <i class="fa-solid fa-cart-shopping fa-beat-fade"> </i> <?= number_format($row_display_card['product_type_price']); ?> .-
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <br><br>

    <div class="text-start" id="r1">
        <h3><i class="fa-solid fa-memory" style="color: #000000;"></i> แรม (RAM)</h3>
        <hr>
    </div>
    <div class="row row-cols-1 row-cols-md-4 g-2">
        <?php
        $sql_ram = "SELECT * FROM product WHERE product_type = '9'";
        $result_ram = mysqli_query($conn, $sql_ram);
        while ($row_ram = mysqli_fetch_array($result_ram)) {
        ?>
            <div class="col">
                <div class="card mb-3 shadow-sm border-0 rounded-4">
                    <img src="img/<?= htmlspecialchars($row_ram['product_type_img']); ?>" class="card-img-top" alt="<?= htmlspecialchars($row_ram['product_type_name']); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($row_ram['product_type_name']); ?></h5>
                        <hr>
                        <p class="card-text"><?= htmlspecialchars($row_ram['product_type_name_eng']); ?></p>
                    </div>
                    <div class="card-footer">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button onclick="addToCart('<?= htmlspecialchars($row_ram['product_type_name']); ?>', <?= htmlspecialchars($row_ram['product_type_price']); ?>, '<?= htmlspecialchars($row_ram['product_type_img']); ?>')" class="btn btn-primary" type="button">
                                <i class="fa-solid fa-cart-shopping fa-beat-fade"> </i> <?= number_format($row_ram['product_type_price']); ?> .-
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <br><br>

    <div class="text-start" id="h1">
        <h3><i class="fa-solid fa-hard-drive" style="color: #000000;"></i> ฮาร์ดดิสก์ (Hard disk)</h3>
        <hr>
    </div>
    <div class="row row-cols-1 row-cols-md-4 g-2">
        <?php
        $sql_hdd = "SELECT * FROM product WHERE product_type = '10'";
        $result_hdd = mysqli_query($conn, $sql_hdd);
        while ($row_hdd = mysqli_fetch_array($result_hdd)) {
        ?>
            <div class="col">
                <div class="card mb-3 shadow-sm border-0 rounded-4">
                    <img src="img/<?= htmlspecialchars($row_hdd['product_type_img']); ?>" class="card-img-top" alt="<?= htmlspecialchars($row_hdd['product_type_name']); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($row_hdd['product_type_name']); ?></h5>
                        <hr>
                        <p class="card-text"><?= htmlspecialchars($row_hdd['product_type_name_eng']); ?></p>
                    </div>
                    <div class="card-footer">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button onclick="addToCart('<?= htmlspecialchars($row_hdd['product_type_name']); ?>', <?= htmlspecialchars($row_hdd['product_type_price']); ?>, '<?= htmlspecialchars($row_hdd['product_type_img']); ?>')" class="btn btn-primary" type="button">
                                <i class="fa-solid fa-cart-shopping fa-beat-fade"> </i> <?= number_format($row_hdd['product_type_price']); ?> .-
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
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
  window.onscroll = function () {
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

  let cart = JSON.parse(localStorage.getItem("cart")) || [];

  function saveCart() {
    localStorage.setItem("cart", JSON.stringify(cart));
  }

  function updateCartBadge() {
    const badge = document.getElementById('cart-count');
    badge.textContent = cart.length > 99 ? '99+' : cart.length;
  }

  function addToCart(name, price, img) {
    cart.push({ name, price, img });
    saveCart();          
    updateCart();
  }

  function removeFromCart(index) {
    cart.splice(index, 1);
    saveCart();          
    updateCart();
  }

  function checkout() {
    const encodedData = encodeURIComponent(JSON.stringify(cart));
    window.location.href = `sell.php?cart=${encodedData}`;
  }

  function updateCart() {
    const cartDiv = document.getElementById("cart");
    cartDiv.innerHTML = "";
    let total = 0;

    if (cart.length === 0) {
      cartDiv.innerHTML = "<p>ไม่มีสินค้าในตะกร้า</p>";
    } else {
      cart.forEach((item, index) => {
        total += item.price;
        cartDiv.innerHTML += `
          <div class="cart-item">
                <img src="img/${item.img}" class="img1" alt="${item.name}">
                <div> 
                    <strong>${item.name}</strong><br>
                    ราคา: ${item.price} บาท
                </div>
                <button class="btn-close ms-auto" onclick="removeFromCart(${index})" aria-label="Remove item"></button>
            </div>
            <hr>
        `;
      });
    }

    document.getElementById("total").innerText = "ราคารวม: " + total.toLocaleString('th-TH') + " บาท";
    document.getElementById("cart-count").innerText = cart.length;
    updateCartBadge();
  }

  window.addEventListener('DOMContentLoaded', () => {
    updateCart();
  });
</script>

  </script>
</body>
</html>
