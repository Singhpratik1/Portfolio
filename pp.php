<?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $comment=$_POST['comment'];


    $conn=new mysqli('localhost','root','','database_form');

    if($conn->connect_error){
        die('sorry we failed to connect:'.connect_error);
    }
    else{
        $stmt-$conn->prepare("insert into database_table (`Name`, `Email`, `Subject`, `Comment`) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssssi",'$name', '$email', '$subject','$comment');
        $stmt->execute();
        echo"Regestration successfull....";
        $stmt->close();
        $conn->close();
    }

   