<?php

include "../conn.inc.php";
include "../url.inc.php";
include "../check login.inc.php";
user_loged_in();

$login_fail ='';
$phone_exist = '';
$login_form_disable = '';


if($conn){
    // for login
    if(isset($_POST['login_req'])){
        if(  
            isset($_POST['log_emailL']) && !empty($_POST['log_emailL']) &&
            isset($_POST['log_passwordL']) && !empty($_POST['log_passwordL'])
        ){
            $log_emailL = htmlspecialchars($_POST['log_emailL']);
            $log_passwordL = htmlspecialchars($_POST['log_passwordL']);
            
            $log_sql = "SELECT * FROM `users_account` WHERE emails='$log_emailL' AND passwords='$log_passwordL' ";
            $log_query = mysqli_query($conn,$log_sql);
            $log_numRows = mysqli_num_rows($log_query);
            // $log_fetch_assoc = mysqli_fetch_assoc($log_query); 
            if( $log_numRows==1 ){    
                $login_fail = "";
                $_SESSION['user_email'] = $log_emailL;
                $_SESSION['user_password'] = $log_passwordL;
                if(isset($_GET['templete']) && $_GET['templete']==1){
                    header("Refresh:0; url=$go_to_templete_page");
                }else{
                    header("Refresh:0; url=$my_account_page");
                }
            }else{
                $login_fail = "wrong credentials ";
            }
        }
    }



    
    // for create account
    if(isset($_POST['create_ac_req'])){
        if(  
            isset($_POST['user_full_name']) && !empty($_POST['user_full_name']) &&
            isset($_POST['user_emailL']) && !empty($_POST['user_emailL']) &&
            isset($_POST['user_mobile']) && !empty($_POST['user_mobile']) && 
            isset($_POST['user_password']) && !empty($_POST['user_password'])
        ){
            // htmlspecialchar
            $user_full_name = htmlspecialchars($_POST['user_full_name']);
            $user_emailL = htmlspecialchars($_POST['user_emailL']);
            $user_mobile = htmlspecialchars($_POST['user_mobile']);
            $user_password = htmlspecialchars($_POST['user_password']);

            // check email exist or not 
            $check_sql = "SELECT * FROM `users_account` WHERE phone='$user_mobile' ";
            $check_query = mysqli_query($conn,$check_sql);
            $check_numRows = mysqli_num_rows($check_query);
            if( $check_numRows!=1 ){
                // img upload
                $fileName = $_FILES['user_image']['name'];
                $fileTmp_location = $_FILES['user_image']['tmp_name'];
                $fileMOve_folder_directory = "./user  imgs/".$fileName;

                // only jpg jpeg png file can upload
                $file_Extention = pathinfo($fileName, PATHINFO_EXTENSION);
                if( ($file_Extention=="jpg") || ($file_Extention=="jpeg") || ($file_Extention=="png") ){
                    if ( move_uploaded_file($fileTmp_location,$fileMOve_folder_directory) ){
                        $sql = "INSERT INTO users_account (full_name,emails,phone,passwords,imgs)
                            VALUES ('$user_full_name','$user_emailL','$user_mobile','$user_password','$fileName')";
                        $create_query = mysqli_query($conn,$sql);
                        if($create_query){
                            $_SESSION['user_email'] = $user_emailL;
                            $_SESSION['user_password'] = $user_password;
                            if(isset($_GET['templete']) && $_GET['templete']==1){
                                header("Refresh:0; url=$go_to_templete_page");
                            }else{
                                header("Refresh:0; url=$my_account_page");
                            }
                        }
                    }
                }
            }else{
                $login_form_disable = "none";
                $create_form_disable = "block";
                $phone_exist = "Your phone number is already exist";
                header("Refresh:2; url=./");
            }
        }
    }

    

}

// php syntex and query





?>

<?php require("../custom header.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>template page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/account.index.css">
</head>
<body>
     <!-- if login section -->
     <section id="login_sec_main_div">
            <!-- if login section -->
            <div style="display: <?php echo $login_form_disable; ?>;" class="login_sec_inner_main login_form">
                <h2 style="color: rgb(243, 243, 243);"><b>Login</b> </h2>
                <form action="" method="post" > 
                    <!--  -->
                    <div class="mb-3">
                        <label class="form-check-label" style="margin-bottom: 7px;"><b>Email</b></label>
                        <input name="log_emailL" type="email" class="form-control" placeholder="Enter your example...@gmail.com" required>
                    </div>
                    <!--  -->
                    <div class="mb-3">
                        <label class="form-check-label" style="margin-bottom: 7px;"><b>Password</b></label>
                        <input name="log_passwordL" type="password" class="form-control" placeholder="Enter your Password***" required>
                    </div>
                    
                    <!--  -->
    
                    <button name="login_req" type="submit" class="btn btn-primary">Login</button>
                    <button onclick="open_create_form()"  class="btn btn-primary" style="background-color: transparent;">Create account</button>
                    <p style="margin-top: 10px; color: red;"><?php echo $login_fail; ?></p>
                </form>
            </div>
    
            <!-- create account -->
            <div style="display: <?php echo $create_form_disable; ?>;" class="login_sec_inner_main create_form">
                <h2 style="color: white;">Create Account </h2>
                <form action="" method="post" enctype="multipart/form-data"> 
                    <!-- Full Name -->
                    <div class="mb-3">
                        <label class="form-check-label" style="margin-bottom: 7px;"><b>Name</b></label>
                        <input name="user_full_name" type="text" class="form-control" placeholder="Your Full name" required>
                    </div>
                    <!-- Select your photo -->
                    <div class="mb-3">
                        <label class="form-check-label" style="margin-bottom: 7px;"><b>Select your photo</b></label>
                        <input name="user_image" type="file" class="form-control" required>
                    </div>
                    <!-- email -->
                    <div class="mb-3">
                        <label class="form-check-label" style="margin-bottom: 7px;"><b>Email</b></label>
                        <input name="user_emailL" type="email" class="form-control" placeholder="Enter your example...@gmail.com" required>
                    </div>
                    <!-- phone -->
                    <div class="mb-3">
                        <label class="form-check-label" style="margin-bottom: 7px;"><b>Phone</b></label>
                        <input name="user_mobile" type="text" class="form-control" placeholder="017*****" required>
                    </div>
                    <!--  -->
                    <div class="mb-3">
                        <label class="form-check-label" style="margin-bottom: 7px;"><b>Password</b></label>
                        <input name="user_password" type="password" class="form-control" placeholder="Enter your Password***" required>
                    </div>
                    
                    <!--  -->
    
                    
                    <button name="create_ac_req" type="submit" class="btn btn-primary" >Create account</button>
                    <button onclick="open_login_form()"  class="btn btn-primary" style="background-color: transparent;">Login</button>
                    <p style="margin-top: 10px; color: red;"><?php echo $phone_exist; ?></p>
                </form>
            </div>
        </section>
<script>
    let login_form = document.querySelector(".login_form");
    let cretae_form = document.querySelector(".create_form");
    function open_create_form(){
        login_form.style.display = "none";
        cretae_form.style.display = "block";
    }
    function open_login_form(){
        login_form.style.display = "block";
        cretae_form.style.display = "none";
    }
</script>
    
</body>
</html>