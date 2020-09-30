<?php
/*$con = mysqli_connect("localhost", "root", "", "user_credit") or die(mysqli_error($con));
$select_query = "";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
/*$total_rows_fetched = mysqli_num_rows($select_query_result);
while ($row = mysqli_fetch_array($select_query_result)) {
    echo $row['id'] . "<br/>";
    echo $row['email'] . "<br/>";
    echo $row['name'] . "<br/>";
    echo $row['current_credit'] . "<br/>";
}
*/
?>
<?php
$con = mysqli_connect("localhost", "id14942083_abc", "Mg*o0uAEWIe\pSNB") ;
if(!$con)
{
    echo 'sorry the connection is not ';
}
mysqli_select_db($con, "id14942083_user_credit");
$select_query = "SELECT id, email,name,current_credit FROM users";
$select_query_result = mysqli_query($con,$select_query) or die(mysqli_error($con));
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Users</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link href="style.css" rel="stylesheet">
         <style>
         .border{
                 border-style: solid;
                 margin: 10px;
                 padding: 20px;
                 width: 100%;
             }
        .but{
            background-color: #e7e7e7; color: black;
        }
             body {
          background-image: url('6.jpg');
          
        }
         </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse"> 
           <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Credit Management</a>
                </div>
                <div>
                    <ul class="nav navbar-nav navbar-right ">
                        <li><a href="users.php" target=" " ><span class="glyphicon glyphicon-user"></span> Users </a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right ">
                        <li><a href="transfer.php" target=" " ><span class="glyphicon glyphicon-share"></span> Transfer Credit</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right ">
                        <li><a href="transaction.php" target=" " ><span class="	glyphicon glyphicon-euro"></span>Transaction History</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right ">
                        <li><a href="index.php" target=" " ><span class="	glyphicon glyphicon-home"></span> Home Page</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    <div class="container" >
        <?php $x=1;
    
         while ($row1 = mysqli_fetch_array($select_query_result)) { ?>
            <div class='border'>
          <?php echo "
              
             .<div class='row'>
              <div class='col-lg-6 divided '><h4>Candidate No. -".$x." </h4></div>" ?> 
              
             </div> 
          
          <div class="row ">
              <div class="col-xs-2">ID</div>
              <div class="col-xs-10"><?php echo $row1['id']; ?></div>
          </div>
        <div class="row">
              <div class="col-xs-2">Name</div>
              <div class="col-xs-10"><?php echo $row1['name']; ?></div>
          </div>
          <div class="row">
              <div class="col-xs-2">Email</div>
              <div class="col-xs-10"><?php echo $row1['email']; ?></div>
          </div>
          
          <div class="row">
              <div class="col-xs-2">Current Credit</div>
              <div class="col-xs-10"><?php echo $row1['current_credit']; ?></div>
          </div>
         
          <hr/>
          </div>
        <?php $x=$x+1; } ?>
    
    
</body>
</html>