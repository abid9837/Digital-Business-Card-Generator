<?php
include "../conn.inc.php";
include "../url.inc.php";
include "../check login.inc.php";

user_login_for_templetes_page();
if(isset($_SESSION['paymen_status_now'])){
    $user_email = $_SESSION['user_email'];
    $user_password = $_SESSION['user_password'];

    $log_sql = "SELECT * FROM `users_account` WHERE emails='$user_email' AND passwords='$user_password' ";
    $log_query = mysqli_query($conn,$log_sql);
    $log_numRows = mysqli_num_rows($log_query);
    $log_fetchAssoc = mysqli_fetch_assoc($log_query);
    

}else{
    header("Refresh:0; url=$go_to_templete_page");
}










?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/payment.complete.css">
</head>
<body>
    
    <section id="body_sec_main">
        <div class="inner_sec_main_div">
            <div class="user_div">
                <img src="../accounts/user  imgs/<?php echo $log_fetchAssoc['imgs'] ?>" alt="img">
            </div>
            <div>
                <h3>your order has been complete</h3>
                <p>You can contact with us to make your QR code public <b>+88 01840249837</b></p>
                <p>You can find your order in account page</p>
                <a style="margin-top: 10px; background-color: #1A6CEB;" href="<?php echo $my_account_page; ?>" class="btn btn-primary">My Account</a>
            </div>
        </div>
    </section>
    <style>
        body{
            background-color: white;
        }
    </style>
</body>
</html>