<?php
$db = mysqli_connect("localhost", "root", "","project_one");
if(isset($_POST['signup'])){
    $in_fname = $_POST['fname'];
    $in_lname = $_POST['lname'];
    $in_ucity = $_POST['ucity'];
    $in_uage = $_POST['uage'];
    $in_Phone = $_POST['Phone'];
    $in_uemail = $_POST['uemail'];
    $in_pass = $_POST['pass'];
    $in_cpass = $_POST['cpass'];
    $en_pass = md5($in_pass);
    $cn_pass = md5($in_cpass);
    $extra = mysqli_query($db, "SELECT * FROM signup WHERE uemail = '$in_uemail'");

    if(mysqli_num_rows($extra)){
        echo"<script>alert('Exist this email please try to other email address')</script>";
    }
    else{
    $query = "INSERT INTO signup (fname, lname, ucity, uage, Phone, uemail, pass, cpass) VALUES ('$in_fname','$in_lname','$in_ucity','$in_uage','$in_Phone','$in_uemail','$en_pass', '$cn_pass')";
    mysqli_query($db,$query);

    echo"<script>
    alert('Sign up sucessfully');
    document.location='login.php';
    if(window.history.replaceState){
        window.history.replaceState(null, null, window.location.signup.php);
      }
    </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="Assets/css/all.min.css">
    <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/css/style.css">
</head>
<body class="signup_body">
    <div class="container">
        <div class="row mt-5">
            <div class="col mt-5">
                <div class="signup_form">
                    <form method="post">
                        <p class="h3 text-center signup_h1">Sign Up</p>
                        <p class="text-center signup_p">Write down your key information below...</p>
                        <div class="box_signup text-center">
                            <input type="text" name="fname" placeholder="Enter your First name" class="mt-sm-2 mb-2" required>
                            <input type="text" name="lname" placeholder="Enter your Last name" class="mt-sm-2 mb-2" required>
                            <input type="text" name="ucity" placeholder="Enter your city name" required>
                        </div>
                        <br>
                        <div class="box_signup text-center">
                            <input type="number" name="uage" placeholder="Enter your age" class="mt-sm-2 mb-2" required>
                            <input type="text" name="Phone" placeholder="Enter your Phone number" class="mt-sm-2 mb-2" required>
                            <input type="email" name="uemail" placeholder="Enter your email" required>
                        </div>
                        <br>
                        <div class="box_signup text-center">
                            <input type="password" name="pass" placeholder="Enter your password" required>
                            <input type="password" name="cpass" placeholder="Confirm your password" required>
                        </div>
                        <br>
                        <div class="box_signup_1 text-center">
                            <input type="submit" name="signup" value="Sign Up">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="Assets/js/all.min.js"></script>
<script src="Assets/js/bootstrap.bundle.js"></script>
</html>