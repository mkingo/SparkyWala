
<?php
    
?>

<!DOCTYPE html>

<head>
    <title>Add User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="user-fav.png">
    <link rel="stylesheet" href="customer_add_style.css">
    
</head>

<body>
    <form class="add_customer_form" action="form.php" method="post" style ="width : 40%; margin : 30px auto;">
        <div class="flex-container-form_header" style = "margin-left:0px;">
            <h1 id="form_header">Please fill in User details...</h1>
        </div>

        <div class="flex-container " style = "margin-left:0px;">
            <div class=container>
                <label> Name :</label><br>
                <input name="Name" size="30" type="text" autocomplete = "off" required  />
            </div>
        </div>  
        

            

        <div class="flex-container" style = "margin-left:0px;">
            <div class=container>
                <label>Account No :</label><br>
                <input name="AccountNo" size="30" minlength = "11" maxlength = "11" type="text" autocomplete = "off" required />
            </div>
        </div>
        <div class="flex-container" style = "margin-left:0px;">
            <div class=container>
                <label>Balance :</label><br>
                <input name="CurrentBalance" size="30" type="text" autocomplete = "off" required />
            </div>
        </div>

        <div class="flex-container" style = "margin-left:0px;">
            <div class=container>
                <label>Email-ID :</label><br>
                <input name="Email" size="30" type="text" autocomplete = "off" required />
            </div>
            
        </div>
        <div class="flex-container" style = "margin-left:0px;">
            <div  class=container>
                <label>Pin :</b></label><br>
                <input name="UniqueKey" size="30" minlength = "12" maxlength = "12" type="password" autocomplete = "off" required />
            </div>
        </div>

        <div class="flex-container" style = "margin-left:0px;">
            <div class="container">
                <a href="users.php" class="button">Go Back</a>
            </div>

            <div class="container">
                <a href="User_added.php">
                <button type="submit" name = "submit">Submit</button></a>
            </div>

            <div class="container">
                <button type="reset" class="reset" onclick="return confirmReset();">Reset</button>
            </div>
        </div>

    </form>

    <script>
    function confirmReset() {
        return confirm('Do you really want to reset?')
    }
    </script>

</body>
</html>