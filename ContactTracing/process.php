<?php
require "connect.php";

if(isset($_POST['SUBMIT'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $date = date("Y-m-d h:i:s a");

    $sql = "INSERT INTO `information` (`id`, `name`, `number`, `email`, `address`, `date`)
    VALUES (0,'$name','$phone','$email','$address','$date')";

    if(mysqli_query($conn,$sql)){
        echo("<script>location.href = 'success.php';</script>");
    }else {
        echo "error";
    }

}else{

	echo("<script>location.href = 'index.php';alert('Error Found.');</script>");

}

?>

