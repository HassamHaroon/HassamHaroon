<?php
include ('server.php');

if(isset($_POST['login'])){

	$in_uemail = $_POST['uemail'];
	$in_pass = $_POST ['pass'];
    $cn_pass = md5($in_pass);

	$qry = "SELECT * FROM signup WHERE uemail = '$in_uemail' AND pass = '$cn_pass'";
	$con_qry  = mysqli_query($con, $qry);

	$count = mysqli_num_rows($con_qry);

	if($count > 0){
		while($row = mysqli_fetch_array($con_qry)){

			$_SESSION['uemail'] = $r['uemail'];
		}

		echo "<script>document.location='dashboard.php'</script>";

	}else{
		echo "<script>
        alert('Login Failed')
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.login.php );
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
    <title>Log in</title>
    <link rel="stylesheet" href="Assets/css/all.min.css">
    <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/css/style.css">
</head>
<body class="login_body">
    <div class="container">
        <div class="row mt-5">
            <div class="col pt-5">
                <div class="login_form pt-sm-4">
                    <form method="post">
                        <p class="h2 text-center login_h3">LOG IN</p>
                        <div class="box_login text-center">
                            <span>Email Address</span>
                            <br>
                            <input type="email" name="uemail" placeholder="Enter your email address" required>
                        </div>
                        <div class="box_login text-center">
                            <span>Password</span>
                            <br>
                            <input type="password" name="pass" placeholder="Enter your password" required>
                        </div>
                        <br>
                        <div class="box_login_sub text-center">
                            <input type="submit" name="login" value="Log In">
                        </div>
                        <p class="text-center mt-2 login_p">If you havn't acount then you click on sign up.. <br><a href="signup.php">Sign Up</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="Assets/js/all.min.js"></script>
<script src="Assets/js/bootstrap.bundle.js"></script>
</html>