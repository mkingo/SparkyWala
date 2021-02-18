

<?php
require('Connection.php');
$sql  = "select * from transaction";
$res2 = mysqli_query($con,$sql);

$i = 1;

?>









<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>All Transaction's</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"/>
    <link rel="icon" type="image/png" sizes="32x32" href="view_transaction-fav.png">
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
      .heading h1{
    
    color:green;
    text-align:center;
    
}


.table{
    
        margin-left: auto;
        margin-right: auto;
        overflow-x: auto;
        width:80%;
        height:80%;
       
    
}



.thead{
    color: aliceblue;
}


img{
  width:100px;
  height:50px;
}

    </style>

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <!-- Container wrapper -->
            <div class="container-fluid">
            <!-- Navbar brand -->
            <a class="navbar-brand" href="index.php">
                <img src="logo.png" alt="logo">
            </a>
            
        
            <!-- Toggle button -->
            <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <i class="fas fa-bars"></i>
            </button>
        
            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ml-auto">
                
                <li class="nav-item">
                    <a class="nav-link" href="users.php">Users</a>
                </li>
               
                
                <li class="nav-item">
                    <a class="nav-link" href="transact.php">Transaction</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_transaction.php">Transaction History</a>
                </li>
                
                </ul>
                <!-- Left links -->
        
                <!-- Search form -->
                
                </form>
            </div>
            <!-- Collapsible wrapper -->
            </div>
            <!-- Container wrapper -->
        </nav>
        
<div class="container">
          <div class="row justify-content-center">
              <div class="col-md-12 text-center py-4">
                  <h1><strong><u>All Transaction's</u></strong></h1>
              </div>

          </div>
      </div>
<table class="table table-dark">
  <thead class="thead-light">
  <tr>
            <th scope="col">#</th>
            <th scope="col">Sender</th>
            <th scope="col">Reciever</th>
            <th scope="col">Amount</th>
            <th scope="col">TimeStamp</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = mysqli_fetch_assoc ($res2)) { ?>
          <tr>
            <th scope="row"><?php echo $i; ?></th>
            <td><?php echo  $row['sname']; ?></td>
            <td><?php echo  $row['rname']; ?></td>
            <td><?php echo  $row['amount']; ?></td>
            <td><?php  echo $row['timestamp'];?></td>
          </tr>
          <?php $i++;
                        } ?>
  </thead>
</table>
      
    
</body>

</html>