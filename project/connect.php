<?php
    $amount = $_POST['amount'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];


    //Database connection

    $conn = new mysqli('localhost','root','','test1');
    if($conn -> connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn -> prepare("insert into tablenew(amount, fullname, email, phone)
        values(?, ?, ?, ?)");
        $stmt->bind_param("issi",$amount,$fullname,$email,$phone);
        $stmt->execute();
        header('location:banking.html');
        $stmt->close();
        $conn->close();

    }
?>