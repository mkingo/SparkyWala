<?php
require('Connection.php');
if(isset($_POST['submit'])){
    $name1 = $_POST['sender'];
    $name2 = $_POST['reciever'];
    $pin = $_POST['pin'];
    $amount = $_POST['amount'];
    $sql = "UPDATE USERS SET CurrentBalance = CurrentBalance-$amount where Name='$name1' ";
    $res = mysqli_query($con,$sql);
    echo '<script>alert("User added succesfully")</script>';
}

?>