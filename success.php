<?php
require('Connection.php');
if(isset($_POST['submit'])){
    
    $name1 = $_POST['sender'];
    $name2 = $_POST['reciever'];
    $pin = $_POST['pin'];
    $amount = $_POST['amount'];
    
    // $sql = "UPDATE USERS SET CurrentBalance = CurrentBalance-$amount where Name='$name1' ";
    
    // $res = mysqli_query($con,$sql);
    $check_upi = mysqli_query($con, "select * from users where Name='$name1'");
    $row = mysqli_fetch_assoc($check_upi);
    $upi_pin = $row['UniqueKey'];
    
    $curr_balance = $row['CurrentBalance'];
    // echo '<script>alert("Transaction done succesfully")</script>';



if ($upi_pin == $pin) {
    if ($amount > $curr_balance) { ?>
        <script>
            alert('Insufficient Balance');
            window.location.href = 'transact.php';
        </script>
    <?php } else if ($amount <= 0) {
    ?>
        <script>
            alert('Please Enter Valid Amount');
            window.location.href = 'transact.php';
        </script>

    <?php

    }
    else{

        $sql = "UPDATE USERS SET CurrentBalance = CurrentBalance-$amount where Name='$name1' ";
    
        $res = mysqli_query($con,$sql);
        $tan = "INSERT INTO `transaction` (`sname`, `rname`, `amount`) VALUES ('$name1', '$name2', '$amount')";
        $res1 = mysqli_query($con,$tan);
        echo '<script>alert("Transaction done succesfully")</script>';
    }
 }
 else{?>
      <script> 
                alert('Enter correct pin');
                window.location.href = 'transact.php';

     </script><?php
 }

}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Completion</title>
</head>
<body>
<div style="text-align :center;"class="container">
        <img src="success.gif" alt="This is an animated gif">
        <h1 style="color: green;">Transaction Done Successfully</h1>
        <p>Click <a href="view_transaction.php"><span> HERE</span></a> to View the Transaction History Page</p>
    </div>
</body>
</html>