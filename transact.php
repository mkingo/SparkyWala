<?php
require('Connection.php');

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" type="image/png" sizes="32x32" href="transact-fav.png">
    <link rel="stylesheet" href="transactStyle.css">
    <title>User-Transactions</title>
</head>
<body>

  <nav class="navbar navbar-dark bg-light">
    <div class="container-fluid bg-dark">
      <a class="navbar-brand bg-dark"><strong><em>User's Transaction<em></strong></a>
      
    </div>
  </nav>

  

<form  class="box" action='success.php' method='post'>
    <div class="container">
  <div class="form-group row">
    <label for="inputname1" class="col-sm-5 col-form-label">From</label>
    
      <input type="text" class="form-control" id="inputname1" placeholder="Enter your Name" name="sender" autocomplete = 'off'>
    
  </div>
  <div class="form-group row">
    <label for="inputname2" class="col-sm-5 col-form-label">To</label>
    
      <input type="text" class="form-control" id="inputname2" placeholder="Enter reciever's Name" name="reciever" autocomplete = 'off'>
    
  </div>
  <div class="form-group row">
    <label for="inputupi" class="col-sm-5 col-form-label">Pin</label>
    
      <input type="password" class="form-control" id="inputpin" placeholder="Enter Sender's pin" name="pin" autocomplete = 'off'>
  </div>

  
  
  <div class="form-group row">
    <label for="inputamount" class="col-sm-5 col-form-label">Amount</label>
    
      <input type="text" class="form-control" id="inputpin" placeholder="Enter Amount" name="amount" autocomplete = 'off'>
    
  </div>
  
  
 
  <div class="form-group row">
    
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    
  </div>
  </div>
  
</form>
</body>
<script>
        const myFunction = () =>{
            // alert('hi');
            let input=document.getElementById('inputname1').value;
            $.ajax({
                url:'balance.php',
                type:'POST',
                data:'name='+input,
                success:function(result){
                    $('#current_balance').val(result);
                }
            });
        }
        const resUpi =() =>{
            let rinput=document.getElementById('inputname2').value;
            $.ajax({
                url:'upiid.php',
                type:'POST',
                data:'name='+rinput,
                success:function(result){
                    $('#recuid').html(result);
                }
            });
        }
    </script>
</html>