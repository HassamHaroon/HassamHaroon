<?php
$db = mysqli_connect("localhost", "root", "", "project_one");
if($_GET['id']){
    $urlid = $_GET['id'];
}

if(isset($_POST['submit'])){
    $input_fname = $_POST['fname'];
    $input_lname = $_POST['lname'];
    $input_ucity = $_POST['ucity'];
    $input_uage = $_POST['uage'];
    $input_Phone = $_POST['Phone'];
    $input_uemail = $_POST['uemail'];
    $input_course = $_POST['course'];
    $input_coursed = $_POST['coursed'];
    $input_total_fee = $_POST['total_fee'];

    $qry = "UPDATE add_record SET fname = '$input_fname', lname = '$input_lname', ucity = '$input_ucity', uage = '$input_uage', Phone = '$input_Phone', uemail = '$input_uemail', course = '$input_course', coursed = '$input_coursed', total_fee = '$input_total_fee' WHERE id = '$urlid'";
    mysqli_query($db,$qry);


    echo"<script>
    alert('Edit Data sucessfully');
    document.location='edit_record.php';
    if(window.history.replaceState){
        window.history.replaceState(null, null, window.location.edit_data.php);
      }
    </script>";
}
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
<body class="add_record_body">

    <?php include('header.php')?>
  
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
            <li class="nav-items mt-5 ps-4">
            <a href="logout.php">Logout</a>
            </li>
        </ul>
    </div>
    <div class="col mt-5">
                <div class="signup_form">
                    <form method="post">
                        <p class="h3 text-center signup_h1">EDIT RECORD</p>
                        <p class="text-center signup_p">Write down your key information below...</p>
                        <div class="box_signup text-center">
                            <input type="text" name="fname" placeholder="Enter your First name" class="mt-sm-2 mb-2" required>
                            <input type="text" name="lname" placeholder="Enter your Last name" class="mt-sm-2 mb-2" required>
                            <input type="text" name="ucity" placeholder="Enter your city name" required>
                        </div>
                        <br>
                        <div class="box_signup text-center">
                            <input type="number" name="uage" placeholder="Enter your age" class="mt-sm-2 mb-2" required>
                            <input type="Phone" name="Phone" placeholder="Enter your Phone number" class="mt-sm-2 mb-2" required>
                            <input type="email" name="uemail" placeholder="Enter your email" required>
                        </div>
                        <br>
                        <div class="box_signup text-center">
                            <input type="text" name="course" placeholder="Enter your course" required>
                            <input type="text" name="coursed" placeholder="Course Duration" required>
                        </div>
                        <br>
                        <div class="box_signup text-center">
                            Monthly Fee : <input  type="number" class="ms-4" name="price" id="price_1" value="0" required/><br>
                            <br>
                            Course Duration : <input type="number" name="qty" id="qty_1" value="0" required/><br>
                            <br><br>
                            Total : <input type="number" name="total_fee" id="total_1" required/>
                            <input type="button" value="ADD THEM" onclick="add()" class="add_rbtn" required>
                        </div>
                        <br>
                        <div class="box_signup_1 text-center">
                            <input type="submit" name="submit" value="EDIT RECORD">
                        </div>
                    </form>
                </div>  
</div>
</div>
<script>
    function add()
         {
           var num1, num2, sum;
           num1 = parseInt(document.getElementById("price_1").value);
           num2 = parseInt(document.getElementById("qty_1").value);
           sum = num1 * num2;
           document.getElementById("total_1").value = sum;
         }
</script>
</html>