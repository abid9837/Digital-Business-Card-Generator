<?php
include "../../../conn.inc.php";
include "../../../url.inc.php";
include "../../../check login.inc.php";
user_login_check_normal_login();
$created_date = date("Y-m-d"); // current date

if($conn){


    // all variable upload 
    $Mobile_number_qr = htmlspecialchars($_POST['SMS_qr_number']);
    $message = htmlspecialchars($_POST['SMS_qr_Message']);
    $templete_name = "SMS.templete.php";

    // link_number genarate
    $link_number_sql = "SELECT * FROM `create_qr_code` ORDER BY id DESC LIMIT 1";
    $link_number_query = mysqli_query($conn,$link_number_sql);
    $link_number_numRows = mysqli_num_rows($link_number_query);
    $link_number_fetchAssoc = mysqli_fetch_assoc($link_number_query);
    $new_link_number = $link_number_fetchAssoc['link_number']+1;

    // user uid upload
    $user_email = $_SESSION['user_email'];
    $user_password = $_SESSION['user_password'];
    // user info 
    $log_sql = "SELECT * FROM `users_account` WHERE emails='$user_email' AND passwords='$user_password' ";
    $log_query = mysqli_query($conn,$log_sql);
    $log_numRows = mysqli_num_rows($log_query);
    $log_fetchAssoc = mysqli_fetch_assoc($log_query);
    // card info
    $user_uid = $log_fetchAssoc['id'];

    $sql = "INSERT INTO create_qr_code (payment_status,created_date,user_uid,templete_name,link_number,Whatsapp_number,message_txt)
            VALUES ('pending','$created_date','$user_uid','$templete_name','$new_link_number','$Mobile_number_qr','$message') ";
    $create_query = mysqli_query($conn,$sql);
    if($create_query){
        $_SESSION['paymen_status_now'] = "on-hold";
        header("Refresh:0; url=../../payment/make payment.php?qr_link=$new_link_number");
    }

}
?>