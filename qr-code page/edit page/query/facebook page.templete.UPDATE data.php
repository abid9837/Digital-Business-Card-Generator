<?php
include "../../../conn.inc.php";
include "../../../url.inc.php";
include "../../../check login.inc.php";
user_login_check_normal_login();

$created_date = date("Y-m-d"); // current date
if($conn){
    // logo upload
    $fileName_logo = $_FILES['fb_page_Upload_your_logo']['name'];
    $fileTmp_location_logo = $_FILES['fb_page_Upload_your_logo']['tmp_name'];
    $fileMOve_folder_directory_logo = "../../imges/logo/".$fileName_logo;
    $file_Extention_logo = pathinfo($fileName_logo, PATHINFO_EXTENSION);

    // img upload
    $fileName = $_FILES['fb_page_body_img']['name'];
    $fileTmp_location = $_FILES['fb_page_body_img']['tmp_name'];
    $fileMOve_folder_directory = "../../imges/body img/".$fileName;
    $file_Extention = pathinfo($fileName, PATHINFO_EXTENSION);

    // all variable upload 
    $Title = htmlspecialchars($_POST['fb_page_Title']);
    // links
    $fb_page_url = htmlspecialchars($_POST['fb_page_url']);
    $fb_page_follower = htmlspecialchars($_POST['fb_page_follower']);

    $templete_name = "facebook page.templete.php";

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


    if( ($file_Extention_logo=="jpg") || ($file_Extention_logo=="jpeg") || ($file_Extention_logo=="png") ){
        move_uploaded_file($fileTmp_location_logo,$fileMOve_folder_directory_logo);
    }
    if( ($file_Extention=="jpg") || ($file_Extention=="jpeg") || ($file_Extention=="png") ){
        move_uploaded_file($fileTmp_location,$fileMOve_folder_directory);
    }
    $sql = "INSERT INTO create_qr_code (payment_status,created_date,user_uid,Title,templete_name,link_number,logo,body_img,Facebook_username,follower)
            VALUES ('pending','$created_date','$user_uid','$Title','$templete_name','$new_link_number','$fileName_logo','$fileName','$fb_page_url','$fb_page_follower') ";
    $create_query = mysqli_query($conn,$sql);
    if($create_query){
        header("Refresh:0; url=../../preview/?qr_link=$new_link_number");
    }

}

?>