<?php
session_start();
include "../conn.inc.php";
$fail_login_display = "none";
$fail_login = "";

if(
    isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['pass']) && !empty($_POST['pass'])
){
    $fail_login_display = "none";

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM `admin` WHERE emails='$email' && passwors='$pass'";
    $query = mysqli_query($conn,$sql);
    $numRows = mysqli_num_rows($query);
    $fetchAssoc = mysqli_fetch_assoc($query);
    if($numRows==1){
        sleep(2);
        $role = $fetchAssoc['role'];
        echo $role;
        // check admin or editor login
        if ($role == "admin"){

            $_SESSION['admin_email']="$email";
            $_SESSION['admin_password']="$pass";
            header("Refresh:0; url=admin panel.php");
        }
        // check admin or editor login
        if ($role == "editor"){

            $_SESSION['editor_email']="$email";
            $_SESSION['editor_password']="$pass";
            header("Refresh:0; url=./add templete");
        }
    }else{
        $fail_login = "Faield Login";
        $fail_login_display = "block";
        $fail_login_display ="flex";
    }

    
}






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index page.css">
    <link rel="stylesheet" href="./css/media query.index page.css">
    <style>
        body{
            background-image: url("./img/gradient-black-background-with-c.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

    </style>
</head>
<body>
    
<section class="body_section">
        <!-- pop up start -->
        <div style="display: <?php echo $fail_login_display; ?>;" class="popup_notice">
            <p > <?php echo $fail_login; ?></p>
        </div>
        <div style="margin-top: 10px;" class="popup_notice">
            <p style="color: white; font-size: 20px;">Admin Login</p>
        </div>
        <!-- form start -->
        <div class="innderSection_form">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="pass" type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="login_btn_div">
                    <button type="submit" class="btn btn-primary">Logi In</button>
                </div>
            </form>
        </div>
</section>

</body>
</html>