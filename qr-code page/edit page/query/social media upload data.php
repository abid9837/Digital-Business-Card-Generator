<?php
include "../../../conn.inc.php";
include "../../../url.inc.php";
include "../../../check login.inc.php";
user_login_check_normal_login();

$created_date = date("Y-m-d"); // current date
if($conn){
    // logo upload
    $fileName_logo = $_FILES['Upload_your_logo']['name'];
    $fileTmp_location_logo = $_FILES['Upload_your_logo']['tmp_name'];
    $fileMOve_folder_directory_logo = "../../imges/logo/".$fileName_logo;
    $file_Extention_logo = pathinfo($fileName_logo, PATHINFO_EXTENSION);

    // img upload
    $fileName = $_FILES['body_img']['name'];
    $fileTmp_location = $_FILES['body_img']['tmp_name'];
    $fileMOve_folder_directory = "../../imges/body img/".$fileName;
    $file_Extention = pathinfo($fileName, PATHINFO_EXTENSION);

    // all variable upload 
    $Title = htmlspecialchars($_POST['Title']);
    // title color
    $Title_color = htmlspecialchars($_POST['Title_color']);
    $Title_color_OCDES = htmlspecialchars($_POST['Title_color_OCDES']);
    if(isset($Title_color_OCDES) && !empty($Title_color_OCDES)){
        $Title_color = $Title_color_OCDES;
    }

    $Message = htmlspecialchars($_POST['Message']);
    $Subtext = htmlspecialchars($_POST['Subtext']);
    // links
    $Facebook_username = htmlspecialchars($_POST['Facebook_username']);
    $Instagram_username = htmlspecialchars($_POST['Instagram_username']);
    $Twitter_Username = htmlspecialchars($_POST['Twitter_Username']);
    $Pinterest_Username = htmlspecialchars($_POST['Pinterest_Username']);
    $Linkedin_Username = htmlspecialchars($_POST['Linkedin_Username']);
    $whatsapp = htmlspecialchars($_POST['whatsapp']);
    $Youtube_channel = htmlspecialchars($_POST['Youtube_channel']);
    $Snapchat_channel = htmlspecialchars($_POST['Snapchat_channel']);
    $Tiktok_channel = htmlspecialchars($_POST['Tiktok_channel']);
    $Website_URL = htmlspecialchars($_POST['Website_URL']);
    $templete_name = "social media.templete.php";

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
    $sql = "INSERT INTO create_qr_code (payment_status,created_date,user_uid,Title,templete_name,link_number,logo,title_color,body_img,message_txt,Subtext,Facebook_username,Instagram_username,Twitter_Username,Pinterest_Username,Linkedin_Username,Whatsapp_number,Youtube_channel,Snapchat_channel,Tiktok_channel,Website_URL)
            VALUES ('pending','$created_date','$user_uid','$Title','$templete_name','$new_link_number','$fileName_logo','$Title_color','$fileName','$Message','$Subtext','$Facebook_username','$Instagram_username','$Twitter_Username','$Pinterest_Username','$Linkedin_Username','$whatsapp','$Youtube_channel','$Snapchat_channel','$Tiktok_channel','$Website_URL') ";
    $create_query = mysqli_query($conn,$sql);
    if($create_query){
        header("Refresh:0; url=../../preview/?qr_link=$new_link_number");
    }

}

?>