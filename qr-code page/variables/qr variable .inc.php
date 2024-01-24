<?php

// if(isset($_GET['qr_link'])&& !empty($_GET['qr_link'])){
//     $qr_link_variable = $_GET['qr_link'];
// }

$sql_variable = "SELECT * FROM `create_qr_code` WHERE link_number='$qr_link_variable' ";
$query_variable = mysqli_query($conn,$sql_variable);
$num_rows_variable = mysqli_num_rows($query_variable);
$fetch_assoc_variable = mysqli_fetch_assoc($query_variable);




// variables 
$templete_name = $fetch_assoc_variable['templete_name'];
$link_number = $fetch_assoc_variable['link_number'];
$logo = $fetch_assoc_variable['logo'];
$Title = $fetch_assoc_variable['Title'];
$title_color = $fetch_assoc_variable['title_color'];
$theme_color = $fetch_assoc_variable['theme_color'];
$body_img = $fetch_assoc_variable['body_img'];
$message_txt = $fetch_assoc_variable['message_txt'];
$Subtext = $fetch_assoc_variable['Subtext'];
$Facebook_username = $fetch_assoc_variable['Facebook_username'];
$Instagram_username = $fetch_assoc_variable['Instagram_username'];
$Twitter_Username = $fetch_assoc_variable['Twitter_Username'];
$Pinterest_Username = $fetch_assoc_variable['Pinterest_Username'];
$Linkedin_Username = $fetch_assoc_variable['Linkedin_Username'];
$Whatsapp_number = $fetch_assoc_variable['Whatsapp_number'];
$Youtube_channel = $fetch_assoc_variable['Youtube_channel'];
$Snapchat_channel = $fetch_assoc_variable['Snapchat_channel'];
$Tiktok_channel = $fetch_assoc_variable['Tiktok_channel'];
$Website_URL = $fetch_assoc_variable['Website_URL'];

// btn 1,2 
$btn1_serialize = $fetch_assoc_variable['btn_1'];
$btn2_serialize = $fetch_assoc_variable['btn_2'];

$btn1_unserialize = unserialize($btn1_serialize);
$btn2_unserialize = unserialize($btn2_serialize);

$fb_page_follower = $fetch_assoc_variable['follower'];



?>