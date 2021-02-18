<?php
require('Connection.php');
$per_page=6;
$start=0;
$current_page=1;
if(isset($_GET['id'])){
    $start=$_GET['id'];
    $current_page=$start;
    $start--;
    $start=$start*$per_page;
}
$res = mysqli_query($con, "select * from users  limit $start, $per_page ");
$i = 1;

$total_records=mysqli_num_rows(mysqli_query($con,"select * from users"));
$num=ceil($total_records/$per_page);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" type="image/png" sizes="32x32" href="user-fav.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
    
    <title>Users-SparkBank</title>
    <style>

  body{
    background-color:aliceblue;
  }
      .heading h1{
    
    color:green;
    text-align:center;
    
}
 button{
  margin-left:1200px ;
  margin-top: 20px;
  margin-bottom: 20px;
}


.table{
    
        margin-left: auto;
        margin-right: auto;
        overflow-x: auto;
       
    
}
.search-input{
    margin-left:650px ;
    margin-top:20px;
}


.thead{
    color: aliceblue;
}

.pagination{
    float:right;
}
.navbar img {
  width:62px;
  height:52px;
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
  
    <div class="heading">
      <br>
      
      
        <h1><b><u>User's info</u></b></h1>
        <input type="text" name="" id="myInput" placeholder="search by names" onkeyup="searchfun()" class="search-input"> 
    </div>
    <button type="button" class="btn btn-primary " data-target="#mymodal" data-toggle="modal" onclick="location.href = 'add-user.php';" >Add User</button>
   <br>
   
    <div class="container">
      <table class="table table-fluid" id="myTable">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Customer-Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Pin</th>
            <th scope="col">Account No</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = mysqli_fetch_assoc ($res)) { ?>
          <tr>
            <th scope="row"><?php echo $row['Id'] ?></th>
            <td><?php echo $row['Name'] ?></td>
            <td><?php echo  $row['Email'] ?></td>
            <td><?php echo  $row['UniqueKey'] ?></td>
            <td><?php echo  $row['AccountNo'] ?></td>
          </tr>
          <?php $i++;
                        } ?>
        </tbody>
      </table>
      <nav>
                    <ul class="pagination justify-content-end">
                        <?php 
                        for($i=1;$i<=$num;$i++){
                        $class='';
                        if($current_page==$i){
                            $class='active';
                        }
                            ?>
                        <li class="page-item  <?php echo $class ?> ">
                            <a href="?id=<?php echo $i ?>" class="page-link"><?php echo $i ?> </a>
                        </li>
                        <?php }?>
                    </ul>
       </nav>
     
       
    </div>
    <script>
      const searchfun = () =>{

        let filter = document.getElementById('myInput').value.toUpperCase();
        let myTable = document.getElementById('myTable');
        let tr = myTable.getElementsByTagName('tr');

        for(var i=0; i<tr.length; i++){
          let td = tr[i].getElementsByTagName('td')[0];

          if(td){
            let textvalue = td.textcontent || td.innerHTML;

            if(textvalue.toUpperCase().indexOf(filter)>-1){
               tr[i].style.display = "";


            }else{
              tr[i].style.display = "none";
            }
          }
        }

          } 
  </script>
</body>
</html>