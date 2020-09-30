<?php
$con = mysqli_connect("localhost", "id14942083_abc", "Mg*o0uAEWIe\pSNB") ;
if(!$con)
{
    echo 'sorry the connection is not ';
}
mysqli_select_db($con, "id14942083_user_credit");
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
            body 
            {
                background-image: url('6.jpg');
            }
            table, th, td {
            border: 1px solid black;
            text-align: center;
            font-family: "Lucida Console", Courier, monospace;
            }
            table {
                border-collapse: collapse;
                width: 100%;
            }
            th{
                text-height: 20px;
                height: 70px;
                text-weight:bold;
            }
            td {
                height: 50px;
                 vertical-align: bottom;
            }
            tr:hover {background-color: #f5f5f5;}
            
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
                <h2>Transactions History</h2>
                <table>
                    <tr>
                        <th><h4>Serial Number</h4></th>
                        <th><h4>Sender_id</h4></th>
                        <th><h4>Sender_name</h4></th>
                        <th><h4>Receiver_id</h4></th>
                        <th><h4>Receiver_name</h4></th>
                        <th><h4>Credit Transferred</h4></th>
                    </tr>
                    <?php
                        $select_query = "SELECT * FROM transaction";
                                $select_query_result = mysqli_query($con, $select_query) ;
                                $x=0;
                                while($row = mysqli_fetch_array($select_query_result))
                                {
                                       ?><tr> <td><?php echo $x?></td>
                                           <td><?php echo $row['sender_id']?></td>
                                           <td><?php echo $row['sender_name']?></td>
                                           <td><?php echo $row['reciever_id']?></td>
                                           <td><?php echo $row['reciever_name']?></td>
                                           <td><?php echo $row['credt']?></td></tr>
                               <?php $x=$x+1; }

                                ?>
                    ?>
                </table>
            </div>
        </div>
       
              
    </body>
</html>