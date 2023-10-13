<?php
require_once "conn.php";
if(isset($_POST['submit'])){
    $name =  $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    if($name != "" && $lastname != "" && $email != "" && $phone!="" ){
        $sql = "INSERT INTO data (`name`,`lastname`,`email`,`phone`) VALUES ('$name','$lastname','$email','$phone')";
        if(mysqli_query($conn, $sql)){
            header("location: index.php");
        } else {
                 echo "Something went wrong. Please try again later.";
        }
    }else{
            echo "Name,lastname and email cannot be empty!";
    }
}

?>