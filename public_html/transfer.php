<?php

$con = mysqli_connect("localhost", "id14942083_abc", "Mg*o0uAEWIe\pSNB") ;
if(!$con)
{
    echo 'sorry the connection is not ';
}
mysqli_select_db($con, "id14942083_user_credit");
if(isset($_GET['idp']))
    $id1 = $_GET['idp'];
else
    echo "";
    
if(isset($_GET['nm']))
    $nm =$_GET['nm'];
else
    echo "";

if(isset($_GET['cr']))
    $cr = $_GET['cr'];
else
    echo "";



?>
<!DOCTYPE html>
<html>
    <head>
        <title>Transfer</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <title>Transfer</title>
         <link href="style.css" rel="stylesheet">
         <style>
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
        <div class="content">
          <div class="container">
            <div class="row">
                <div class="col-md-6">
        <form action="" method="GET" >
                        <h2>From</h2>
							 <div class="form-group">
                            <label for="name">Enter your Name</label>
                         
                            <select id="nam" name="fromname">
                            <!--<input type="text"  name="toname" class="form-control"  >-->  
                                <option >--</option>
                                <?php
                                $select_query = "SELECT name FROM users";
                                $select_query_result = mysqli_query($con, $select_query) ;
                                while($row1 = mysqli_fetch_array($select_query_result))
                                {
                                       ?> <option ><?php echo $row1['name']?></option>
                               <?php }

                                ?>
                            </select>
                            </div>
                            
                           
                        <h2>To</h2>
                        
                            <div class="form-group">
                            <label for="value">Enter the name of person </label>
                            <select id="nam" name="toname">
                            <!--<input type="text"  name="toname" class="form-control"  >--> 
                                <option >--</option>
                                <?php
                                $select_query = "SELECT name FROM users";
                                $select_query_result = mysqli_query($con, $select_query) ;
                                while($row1 = mysqli_fetch_array($select_query_result))
                                {
                                       ?> <option ><?php echo $row1['name']?></option>
                               <?php }

                                ?>
                            </select>
                            </div>
                            

                            <div class="form-group">
                            <label for="value">Enter the credit to transfer </label>
                            <input type="text"  name="credits" class="form-control"  >
                            </div>
                             <div class="form-group">
                            <input type="submit"  name = "submit" value="Transfer Credits" >
                             </div>
                        
                        

                    </form>
                </div>
                    </div>
                </div>
          </div>
       <footer id="footer" class="foot footstyle">
            <div class="container">
            <center>
                <p>Made By -: Aditya Gupta, Contact- aditya2907gup@gmail.com</p>
            </center>
                </div>
        </footer>  
                
    </body>
</html>
<?php
                                if(isset($_GET['fromname']))
                                    $name =$_GET['fromname'];
                                else
                                    echo " ";
                                /*if(isset($_GET['from_id']))
                                    $id =$_GET['from_id'];
                                else
                                    echo " ";
                                
                            
                                
                                if(isset( $_GET['toid']))
                                     $toid = $_GET['toid'];
                                else
                                    echo " ";*/
                                    
                                if(isset( $_GET['credits']))
                                    $credit = $_GET['credits'];
                                else
                                    echo " ";
                                
                                if(isset( $_GET['toname']))
                                    $tname = $_GET['toname'];
                                else
                                    echo " ";
                                
                               
                               
                                if(!isset($_GET['submit']))
                                {
                                    echo " ";
                                }
                                else if($_GET['submit'])
                                {
                                        //echo "credit= ".$credit."cr = ".$q;
                                    $query4="select * from users where name='$name'";
                                    $query5="select * from users where name='$tname'";
                                    $data4= mysqli_query($con, $query4);
                                    $data5= mysqli_query($con, $query5);
                                    //echo mysqli_num_rows($data4).$mysqli_num_rows($data5);
                                    if((mysqli_num_rows($data4))==0||(mysqli_num_rows($data5))==0)
                                    {
                                        echo "<h3 'style=color:white;'>Incorrect id <h3>.<button><a href='index.php'>Again transfer</a></button>";
                                    }
                                    else{
                                        $query3="select * from users where name='$name'";
                                        $ans=mysqli_query($con,$query3);
                                        $row = mysqli_fetch_array($ans);
                                        $fromid=$row['id'];
                                        $row2=mysqli_fetch_array($data5);
                                        $toid=$row2['id'];
                                    
                                        //echo "%%%%%%%%%%".$row['current_credit']."###############".$fromid.$toid;
                                        if($credit<0)
                                        {
                                            echo "<h3 'style=color:white;'>Ivalid Credit<h3>.<button><a href='transfer.php'>Again enter the credit</a></button>";

                                        }
                                        else if($tname==$name)
                                        {
                                            echo "<h3 'style=color:white;'>transferring to same account<h3>.<button><a href='transfer.php'>Again enter the credit</a></button>";

                                        }
                                        else if($credit>$row['current_credit'])
                                        {
                                            echo "<h3 'style=color:white;'>Insufficient Credit<h3>.<button><a href='transfer.php'>Again enter the credit</a></button>";

                                        }
                                        else if($credit==0)
                                        {
                                            echo "<h3 'style=color:white;'>No Transaction Occured<h3>.<button><a href='transfer.php'>Again enter the credit</a></button>";

                                        }else{
                                        $query="update users set current_credit = current_credit+'$credit' where name='$tname'";
                                        $query1="update users set current_credit = current_credit-'$credit' where name='$name'";
                                        //$query="update users set name='$tname',current_credit = '$credit' where id='$toid'";
                                        $data = mysqli_query($con,$query);
                                        $data1 = mysqli_query($con,$query1);
                                        //echo 'asdfghj kl';
                                       $query2="insert into transaction (sender_name,sender_id,reciever_name,reciever_id,credt) values ('$name','$fromid','$tname','$toid','$credit')";
                                        $data2= mysqli_query($con, $query2);
                                        if($data&&$data1)
                                        {
                                            //echo $id.$name.$toid.$toname;
                                            
                                            if($data2)
                                            {
                                               // echo "qqqqqqqqqqqq";
                                           }
                                           else
                                           {
                                               echo '..............error';
                                           }
                                             echo "<h3>Transaction Sucessful<h3>.<a href='index.php'>Transer Again</a>";
                                        }
                                        else
                                        {
                                            echo "failed to update";
                                        }
                                        }
                                    }
                                }
                                    else
                                    {
                                        echo "";
                                    } 
                                
                       