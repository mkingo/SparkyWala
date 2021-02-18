<?php
    require('connection.php');
 
    $name=strtolower($_POST['Name']);

    $sql=mysqli_query($con,"select current_balance from users where name='$name'");
    $row=mysqli_fetch_assoc($sql);
    echo $row['CurrentBalance'];
?>