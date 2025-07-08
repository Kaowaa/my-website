<?php
session_start();
?>
<?php
include('connect.php');
if(isset($_POST['submit'])){
    $form_username = $_POST['form_username'];
    $form_pass = $_POST['form_pass'];
}

$sql001 = "SELECT * FROM login";
$result001 = mysqli_query($conn, $sql001);
$rows001 = mysqli_fetch_array($result001);

$username = $rows001['login_username'];
$pass = $rows001['login_pass'];

if($username==$form_username && $pass==$form_pass){
    $_SESSION["login_username"] = $username;
    $_SESSION["login_pass"] = $pass;
    $_SESSION["login_fistname"] = $rows001['login_fistname'];
    $_SESSION["login_lastname"] = $rows001['login_lastname'];
    $_SESSION["login_tell"] = $rows001['login_tell']; 

    echo "<script>
        window.location.replace('index.php');
    </script>";
}else{
    echo "False";
}
?>