<?php
require('Connection.php');

if (isset($_POST['submit'])) {
    $name = $_POST['Name'];
    $acc_no = $_POST['AccountNo'];
    $email = $_POST['Email'];
  
    $balance = $_POST['CurrentBalance'];
    $pin = $_POST['UniqueKey'];

    $sql = mysqli_query($con, "INSERT INTO `users` (`Name`,`Email`, `AccountNo`,`UniqueKey`,  `CurrentBalance`) VALUES ('$name','$email', '$acc_no','$pin','$balance')");
?>
    <script>
        location.href = 'User_added.php';
    </script>
<?php
}
?>