<?php
include "../../../conn.inc.php";
include "../../../url.inc.php";
include "../../../check login.inc.php";
user_login_check_normal_login();

$created_date = date("Y-m-d"); // current date
if($conn){

    // img upload
    $fileName = $_FILES['body_img']['name'];
    $fileTmp_location = $_FILES['body_img']['tmp_name'];
    $fileMOve_folder_directory = "../../imges/body img/".$fileName;
    $file_Extention = pathinfo($fileName, PATHINFO_EXTENSION);

    // all variable upload 
    $Title = htmlspecialchars($_POST['Title']);
    
    $Message = htmlspecialchars($_POST['Message']);
    $Subtext = htmlspecialchars($_POST['Subtext']);
    // theme
    $theme_color = htmlspecialchars($_POST['theme_color']);
    $theme_color_OCDES = htmlspecialchars($_POST['theme_color_OCDES']);
    if(isset($theme_color_OCDES) && !empty($theme_color_OCDES)){
        $theme_color = $theme_color_OCDES;
    }
    // fonts
    $font_color = htmlspecialchars($_POST['font_color']);
    $font_color_OCDES = htmlspecialchars($_POST['font_color_OCDES']);
    if(isset($font_color_OCDES) && !empty($font_color_OCDES)){
        $font_color = $font_color_OCDES;
    }
    // 
    $btn1_name = htmlspecialchars($_POST['btn1_name']);
    $btn1_url = htmlspecialchars($_POST['btn1_url']);
    $btn2_name = htmlspecialchars($_POST['btn2_name']);
    $btn2_url = htmlspecialchars($_POST['btn2_url']);
    // 
    $btn1 = array($btn1_name,$btn1_url);
    $btn2 = array($btn2_name,$btn2_url);

    $btn1_serialize = serialize($btn1);
    $btn2_serialize = serialize($btn2);

    // 

    $templete_name = "landing.page.templete.php";

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


    if( ($file_Extention=="jpg") || ($file_Extention=="jpeg") || ($file_Extention=="png") ){
        move_uploaded_file($fileTmp_location,$fileMOve_folder_directory);
    }
    $sql = "INSERT INTO create_qr_code (btn_1,btn_2,payment_status,created_date,user_uid,Title,templete_name,link_number,title_color,body_img,message_txt,Subtext,theme_color)
            VALUES ('$btn1_serialize','$btn2_serialize','pending','$created_date','$user_uid','$Title','$templete_name','$new_link_number','$font_color','$fileName','$Message','$Subtext','$theme_color') ";
    $create_query = mysqli_query($conn,$sql);
    if($create_query){
        header("Refresh:0; url=../../preview/?qr_link=$new_link_number");
    }

}

?>