<?php

include('header.php');
$print = $r;

$db = mysqli_connect("localhost","root", "","project_one");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="Assets/css/all.min.css">
    <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/css/style.css">
</head>
<style>
  .dashboard_body{
    background-color: aliceblue;
    font-family: 'josefin';
  }
  .dashboard_heading_1{
    letter-spacing: 1px;
    word-spacing: 2px;
    padding-top: 10px;
    opacity: 70%;
  }
table td{
  padding: 5px 30px 5px 30px;
  border: 1px solid grey;
  color: #fff;
  background: linear-gradient(90deg, #03bbf3 0%, #0964ec 100%);
}
.show_data{
  font-size: 14px;
  opacity: 70%;
}
.show_data a{
  text-decoration: none;
  color: #fff;
}
</style>
<body class="dashboard_body">
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
    <div class="col">
      <p class="h1 text-center pb-4 dashboard_heading_1">ACTIVE STUDENTS</p>
      <table>
        
      <tr class="me-5 table_row">
        <div class="row text-center">
          <div class="col-sm-1">
          <tr>  
          <td>ROLL NO</td>
            
          </div>
          <div class="col-sm-2">
            <td>NAME</td>
            
          </div>
          <div class="col-sm-2">
            <td>FATHER NAME</td>
            
          </div>
          <div class="col-sm-2">
            <td>COURSE NAME</td>
            
          </div>
          <div class="col-sm-2">
            <td>TOTAL FEE</td>
            
          </div>
          <div class="col-sm-2">
            <td>DURATION</td>
            
          </div>
          <div class="col-sm-2">
            <td>EXPOSE</td>
            
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
          $show_course = $row['course'];
          $show_total_fee = $row['total_fee'];
          $show_coursed = $row['coursed'];
        
        ?>
        <tr class="show_data">
        <td><?php echo $show_id; ?></td>
        <td><?php echo $show_fname; ?></td>
        <td><?php echo $show_lname; ?></td>
        <td><?php echo $show_course; ?></td>
        <td><?php echo $show_total_fee; ?></td>
        <td><?php echo $show_coursed; ?></td>
        <td><a href="inv_data.php?id=<?php echo $show_id;?>">view</a></td>
        </tr>
<?php
        }
      ?>
      </table>
    </div>
</div>
</div>


