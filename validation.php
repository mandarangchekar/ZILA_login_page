<?php
if(!isset($_SESSION)){
    session_start();
}
$con = mysqli_connect("localhost", "root");

mysqli_select_db($con, 'userregistration');

if(isset($_POST['user']) && isset($_POST['password'])){
    $name = $_POST['user'];
    $pass = $_POST['password']; //Line 11

    $s = "select * from usertable where name = '$name' && password='$pass'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);
    if ($num == 1){
        $_SESSION['username'] = $name;
        header('location:home.php');
    }
    else {
        header('location:login.php');
    }


}

// $name = $_POST['user'];
// $pass = $_POST['password'];

 ?>
