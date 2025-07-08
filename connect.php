<?php
$servername = "localhost";
$username = "root";
$password = "wwe123za";
$database = "potato";
$img = "flower_type";

$conn = mysqli_connect($servername, $username, $password ,$database,);


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

  /*?>
  <div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text">
          <br><?=$_SESSION["login_username"]?></br>
              <?=$_SESSION["login_pass"]?>
          <br><?=$_SESSION["login_fistname"]?></br>
              <?=$_SESSION["login_lastname"]?>
          <br><?=$_SESSION["login_tell"]?></br>
      </p>
    </div>
  </div>