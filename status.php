<?php
session_start();  
?>
<html>
<head>
<title>Bookings</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="container">
<h2>All Bookings Status</h2>
    <form action="" method="POST">
        <input type="text" name="userid" placeholder="Enter-Id"/>
        <input type="submit" name="search" value="My Bookings">
    </form>
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