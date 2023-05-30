<?php

$db = mysqli_connect("localhost","root", "", "project_one");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inv-data page</title>
    <link rel="stylesheet" href="Assets/css/all.min.css">
    <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/css/style.css">
</head>
<style>
  table td{
  padding: 5px 15px 5px 15px;
  border: 1px solid grey;
  color: #fff;
  background: linear-gradient(90deg, #03bbf3 0%, #0964ec 100%);
  font-size: 12px;
}
.show_data{
  font-size: 14px;
  opacity: 70%;
}
.show_data a{
  text-decoration: none;
  color: #fff;
}
.inv_body{
  font-family: 'josefin';
}
.inv_heading_1{
  color: black;
  opacity: 70%;
  letter-spacing: 1px;
}
.inv_body{
  background-color: aliceblue;
}
</style>
<body class="inv_body">
  <div class="container-fluid">
    <div class="row">
    <div class="progress mt-2" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 85%"></div>
    </div>
        <div class="col-2 mt-2 ms-2 p-4 nav-bar">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link <?php $page == 'dashboard.php' ? 'active':'' ?>" aria-current="page" href="dashboard.php">Dashboard</a>
        </li>
        <br>
        <br>
        <li class="nav-item">
          <a class="nav-link" href="add_record.php">Add Record</a>
        </li>
        <br>
        <br>
        <li class="nav-item">
          <a class="nav-link" href="view_student_record.php">View-All-Students</a>
        </li>
        <br>
        <br>
        <li class="nav-item">
          <a class="nav-link" href="edit_record.php">Edit Record</a>
        </li>
        <br>
        <br>
        <li class="nav-item">
          <a class="nav-link" href="delete_record.php">Delete Record</a>
        </li>
        <li class="nav-item mt-5 ps-4">
          <a href="logout.php">Logout</a>
        </li>
      </ul>
  </div>
    <div class="col-md-9">
      <table>
      <p class="h1 text-center mb-sm-3 mt-sm-3 inv_heading_1">DELETE DATA</p>  
      <tr class="table_row">
      <div class="col-sm-1 text-center">
          <tr>  
          <td>ROLL NO</td>
            
          </div>
          <div class="col-sm-1">
            <td>NAME</td>
            
          </div>
          <div class="col-sm-1">
            <td>FATHER NAME</td>
            
          </div>
          <div class="col-sm-1">
            <td>CITY NAME</td>
            
          </div>
          <div class="col-sm-1">
            <td>AGE</td>
            
          </div>
          <div class="col-sm-1">
            <td>PHONE NUMBER</td>
            
          </div>
          <div class="col-sm-1">
            <td>EMAIL</td>
            
          </div>
          <div class="col-sm-1">
            <td>COURSE</td>
            
          </div>
          <div class="col-sm-1">
            <td>DURATION</td>
            
          </div>
          <div class="col-sm-1">
            <td>TOTAL FEE</td>
            
          </div>
          <div class="col-sm-1">
            <td>DELETE</td>
            
          </div>
          
        </div>

      </tr>
      
      <?php
        $qry = "SELECT * FROM add_record";
        $connect =  mysqli_query($db,$qry);
        while($row = mysqli_fetch_array($connect)){
          $show_id = $row['id'];
          $show_fname = $row['fname'];
          $show_lname = $row['lname'];
          $show_ucity = $row['ucity'];
          $show_uage = $row['uage'];
          $show_Phone = $row['Phone'];
          $show_uemail = $row['uemail'];
          $show_course = $row['course'];
          $show_coursed = $row['coursed'];
          $show_total_fee = $row['total_fee'];
          
        ?>
        <tr class="show_data">
        <td><?php echo $show_id; ?></td>
        <td><?php echo $show_fname; ?></td>
        <td><?php echo $show_lname; ?></td>
        <td><?php echo $show_ucity; ?></td>
        <td><?php echo $show_uage; ?></td>
        <td><?php echo $show_Phone; ?></td>
        <td><?php echo $show_uemail; ?></td>
        <td><?php echo $show_course; ?></td>
        <td><?php echo $show_coursed; ?></td>
        <td><?php echo $show_total_fee; ?></td>
        <td><a href="deleted_data.php?id=<?php echo $show_id;?>"
					onclick="return confirm('Are you sure you want to delete this?')">
				Delete
			</a></td>
        </tr>
        <?php
            }
        ?>
      </table>
      </div>
        </div>
    </div>
    
</body>
<script src="Assets/js/all.min.js"></script>
<script src="Assets/js/bootstrap.bundle.js"></script>
</html>