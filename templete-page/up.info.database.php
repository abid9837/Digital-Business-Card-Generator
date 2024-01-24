<?php
include "../conn.inc.php";
include "../url.inc.php";
include "../check login.inc.php";
user_login_for_templetes_page();
$current_date = date("Y-m-d");

if(isset($_GET['tmp'])){
    // get tmp uid 
    $tmp_uid = $_GET['tmp']; 
    // post user input field
    // varialbes name same database and post name form templete inputs form
    $user_name = $_POST['userName'];
    
    // logo upload
    $fileName_logo = $_FILES['user_logo']['name'];
    $fileTmp_location_logo = $_FILES['user_logo']['tmp_name'];
    $fileMOve_folder_directory_logo = "../Templetes/templete user img/logo/".$fileName_logo;
    $file_Extention_logo = pathinfo($fileName_logo, PATHINFO_EXTENSION);

    // img upload
    $fileName = $_FILES['userImg']['name'];
    $fileTmp_location = $_FILES['userImg']['tmp_name'];
    $fileMOve_folder_directory = "../Templetes/templete user img/".$fileName;
    $file_Extention = pathinfo($fileName, PATHINFO_EXTENSION);

    $user_2nd_number = htmlspecialchars($_POST['user_2nd_number']);
    $user_color_all_field = $_POST['user_color_all_field'];
    $user_color_all_field_color_OCDES = htmlspecialchars($_POST['user_color_all_field_color_OCDES']);
    if(isset($user_color_all_field_color_OCDES) && !empty($user_color_all_field_color_OCDES)){
        $user_color_all_field = $user_color_all_field_color_OCDES;
    }

    $user_short_title  = htmlspecialchars($_POST['shortTitle']);
    $user_department  = htmlspecialchars($_POST['department']);
    $user_short_des = htmlspecialchars($_POST['user_short_des']);
    $user_location = htmlspecialchars($_POST['location']);
    $user_mobile = htmlspecialchars($_POST['mobileNumber']);
    $user_email_link = htmlspecialchars($_POST['email']);
    $user_website_link = htmlspecialchars($_POST['websiteLink']);
    $user_instagram_link = htmlspecialchars($_POST['InstagramLink']);
    $user_facebook_link = htmlspecialchars($_POST['FacebookLink']);
    $user_twiter_link = htmlspecialchars($_POST['user_twiter_link']);
    // array userInputFill_icons for select user social icon inline 
    $userInputFill_icons = $_POST['userInputFill_icons'];
        $inline_social_icons_serialize = serialize($userInputFill_icons);//
       
    // make bottomButton_text and bottomButtonURL array
    $bottomButton_text = htmlspecialchars($_POST['bottomButton_text']);
    $bottomButtonURL = htmlspecialchars($_POST['bottomButtonURL']);
        $bottom_btn = array($bottomButton_text,$bottomButtonURL);
        $bottom_btn_serialize = serialize($bottom_btn);
    // new post varianle stsrt from here *******


    // social icons link update 
    $facebook_link_icon = $_POST['facebook_link_icon']; //
    $instagram_link_icon =  $_POST['instagram_link_icon']; //
    $twitter_link_icon =  $_POST['twitter_link_icon']; //
    $whatsapp_link_icon =  $_POST['whatsapp_link_icon']; //
    $linkedin_link_icon =  $_POST['linkedin_link_icon']; //
    $telegram_link_icon =  $_POST['telegram_link_icon']; //
    $youtube_link_icon =  $_POST['youtube_link_icon'];// 

    // link_number genarate
    $link_number_sql = "SELECT * FROM `create_cards` ORDER BY id DESC LIMIT 1";
    $link_number_query = mysqli_query($conn,$link_number_sql);
    $link_number_numRows = mysqli_num_rows($link_number_query);
    $link_number_fetchAssoc = mysqli_fetch_assoc($link_number_query);
    $new_link_number = $link_number_fetchAssoc['link_number']+1;


    // user uid find and save to create cards
    $user_email = $_SESSION['user_email'];
    $user_sql = "SELECT * FROM `users_account` WHERE emails='$user_email'";
    $user_query = mysqli_query($conn,$user_sql);
    $user_numRows = mysqli_num_rows($user_query);
    $user_fetchAssoc = mysqli_fetch_assoc($user_query);
    $user_uid = $user_fetchAssoc['id'];

    // create cards 
    // with logo
    if( ($file_Extention_logo=="jpg") || ($file_Extention_logo=="jpeg") || ($file_Extention_logo=="png") ){
        move_uploaded_file($fileTmp_location_logo,$fileMOve_folder_directory_logo);
        
    }else{
        $fileName_logo = '';
    }
    // with out logo
    if( ($file_Extention=="jpg") || ($file_Extention=="jpeg") || ($file_Extention=="png") ){
        if ( move_uploaded_file($fileTmp_location,$fileMOve_folder_directory) ){
            


            $sql = "INSERT INTO create_cards (user_2nd_number,user_color_all_field,department,company_logo,created_date,payment_status,user_uid,templete_uid,link_number,user_img,user_name,user_location,user_short_title,user_short_des,user_website_link,user_email_link,user_facebook_link,user_instagram_link,user_twiter_link,user_mobile,inline_social_icons,bottom_btn)
            VALUES ('$user_2nd_number','$user_color_all_field','$user_department','$fileName_logo','$current_date','pending','$user_uid','$tmp_uid','$new_link_number','$fileName','$user_name','$user_location','$user_short_title','$user_short_des','$user_website_link','$user_email_link','$user_facebook_link','$user_instagram_link','$user_twiter_link','$user_mobile','$inline_social_icons_serialize','$bottom_btn_serialize')";
            $create_query = mysqli_query($conn,$sql);
            if($create_query){
                $_SESSION['link_number']=$new_link_number;
                $_SESSION['tmp_uid']=$tmp_uid;
                // 
                $sql_update = "UPDATE create_cards
                    SET user_facebook_link='$facebook_link_icon', user_instagram_link='$instagram_link_icon', user_twiter_link='$twitter_link_icon', user_Linkedin_link='$linkedin_link_icon', user_telegram_link='$telegram_link_icon', user_youtube_link='$youtube_link_icon', user_whatsapp='$whatsapp_link_icon'
                    WHERE link_number='$new_link_number' ";
                $sql_update_query = mysqli_query($conn,$sql_update);
                
                header("Refresh:0; url=$after_create_cards_preview_page");
            }
        }
    }
    

}else{
    header("Refresh:0; url=$go_to_templete_page");
    
}




?>