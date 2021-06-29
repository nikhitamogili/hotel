<?php
session_start();  
?>
<html>
<head>
<title>Bookings</title>
    <style>
h1{
    color: crimson;
    font-size: 60px;
        }
        h2{
            color: firebrick;
            font-size: 50px;
        }
form{
 margin:20px;
 padding: 20px 30px;
 
}
input[type=text] {
    border: 2px solid #acde16;
    border-radius: 4px;
    height: 40px;
    width:180px;
    font-size: 20px;
    
}
input[type=submit]{
           
    background: #230ffa;
    height: 30px;
    width:130px;
    font-size: 20px;
    color:#fff;
    margin-left: 60px;
        }
textarea {
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #acde16;
  border-radius: 4px;
  
}
table{
            margin-left: 30px;
            margin-right: auto;
        }
th{
            padding:23px;
            text-align: center;
            border-spacing: 10px;
            color: deeppink;
        }
td{
            padding:10px;
            text-align: center;
            border-spacing: 10px;
    color: 
        }
    </style>
</head>
<body style="background:#0ffab7">
<div class="container">
<center><h2>All Bookings Status</h2></center>
    <center><form action="" method="POST">
        <input type="text" name="userid" placeholder="Enter-Id"/>
        <input type="submit" name="search" value="My Bookings">
        </form></center>
    <table class="table table-striped table-hover ">
        <thead>
            <tr class="first">	
            <th>Sr.no</th>
            <th>Title</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Type of Room</th>
            <th>Bed</th>
            <th>No of Rooms</th>
            <th>Meal</th>
            <th>Check In</th>
            <th>Check Out</th>
            <th>Status</th>
            <th>Number of days</th>
            </tr>
        </thead>
        <?php 
          include ('db.php');
          $i=1;
          if (isset($_POST["search"]))
          {
          $nid = $_POST["userid"];
          $check= "SELECT * FROM `roombook` WHERE Uid = '$nid'";
          $rs=mysqli_query($con, $check);
              while($row=$rs->fetch_assoc())
              {
                  ?>
                <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $row['Title'];?></td>
                <td><?php echo $row['FName'];?></td>
                <td><?php echo $row['LName'];?></td>
                <td><?php echo $row['Email'];?></td>
                <td><?php echo $row['Phone'];?></td>
                <td><?php echo $row['TRoom'];?></td>
                <td><?php echo $row['Bed'];?></td>
                <td><?php echo $row['NRoom'];?> </td>
                <td><?php echo $row['Meal'];?></td>
                <td><?php echo $row['cin'];?></td>
                <td><?php echo $row['cout'];?></td>
                <td style="color:green;"><?php echo $row['stat'];?></td>
                <td><?php echo $row['nodays'];?></td>
                </tr>
        <?php
        $i++;}}
         ?>
</table> 
</div>
</body>
</html>