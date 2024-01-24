<?php

// digital templete show all field
$show_user_temp_data_sql = "SELECT * FROM `create_cards` WHERE link_number='$preview_templete_uid'";
$show_user_temp_data_query = mysqli_query($conn,$show_user_temp_data_sql);
$show_user_temp_data_numRows = mysqli_num_rows($show_user_temp_data_query);
if( $show_user_temp_data_numRows<1){
    header("Refresh:0; url=$go_to_templete_page");
}
$show_user_temp_data_fetchAssoc = mysqli_fetch_assoc($show_user_temp_data_query);
// all fields variable
$user_selected_all_field_color = $show_user_temp_data_fetchAssoc['user_color_all_field'];
$company_logo = $show_user_temp_data_fetchAssoc['company_logo']; //
$user_department = $show_user_temp_data_fetchAssoc['department']; //
$user_img  = $show_user_temp_data_fetchAssoc['user_img']; //
$user_name = $show_user_temp_data_fetchAssoc['user_name']; //
$short_title = $show_user_temp_data_fetchAssoc['user_short_title']; //
$location_address = $show_user_temp_data_fetchAssoc['user_location']; //
$user_short_des = $show_user_temp_data_fetchAssoc['user_short_des']; //
$mobile_number = $show_user_temp_data_fetchAssoc['user_mobile']; //
$e_mail = $show_user_temp_data_fetchAssoc['user_email_link']; //
$website_link = $show_user_temp_data_fetchAssoc['user_website_link']; //
$instagram_link = $show_user_temp_data_fetchAssoc['user_instagram_link']; //
$facebook_link = $show_user_temp_data_fetchAssoc['user_facebook_link']; //

$user_2nd_number = $show_user_temp_data_fetchAssoc['user_2nd_number']; 



$twitter_link = $show_user_temp_data_fetchAssoc['user_twiter_link']; //
$Linkedin_link = $show_user_temp_data_fetchAssoc['user_Linkedin_link']; // 
$user_telegram_link = $show_user_temp_data_fetchAssoc['user_telegram_link']; // 
$user_youtube_link = $show_user_temp_data_fetchAssoc['user_youtube_link']; // 

$bottom_button_array_serialize = $show_user_temp_data_fetchAssoc['bottom_btn'];
$bottom_button_array_unserialize = unserialize($bottom_button_array_serialize);

$inline_social_icons_serialize = $show_user_temp_data_fetchAssoc['inline_social_icons'];
$inline_social_icons_unserialize = unserialize($inline_social_icons_serialize);

?>