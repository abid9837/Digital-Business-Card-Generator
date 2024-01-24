<?php
include "../conn.inc.php";
include "../url.inc.php";

if(isset($_GET['tmp']) && $_GET['tmp']!=""){}else{
    header("Refresh:0; url=$go_to_templete_page");
}
$id = $_GET['tmp'];
// get templete data form templetes
$get_templete_sql = "SELECT * FROM `templetes` WHERE id='$id'";
$get_templete_query = mysqli_query($conn,$get_templete_sql);
$get_templete_numRows = mysqli_num_rows($get_templete_query);
$get_templete_fetchAssoc = mysqli_fetch_assoc($get_templete_query);

// echo $get_templete_fetchAssoc['temp_content'];
$tmp_inputs = $get_templete_fetchAssoc['temp_inputs'];
$unserialize_tmp_inputs = unserialize($tmp_inputs);

// echo count($unserialize_tmp_inputs);
// if(in_array('userImg',$unserialize_tmp_inputs)){
//     echo "add img form";  
// }
// if(in_array('userName',$unserialize_tmp_inputs)){
//     echo "add name input";  
// }
// if(in_array('ghujhjhj',$unserialize_tmp_inputs)){
//     echo "add name nothing";  
// }

// default value 

if(in_array('user_color_all_field',$unserialize_tmp_inputs)){
    $user_color_all_field = "block";
    $user_color_all_field = "required";
}
if(in_array('department',$unserialize_tmp_inputs)){
    $department = "block";
    $userImg_required = "required";
}
if(in_array('Company_Logo',$unserialize_tmp_inputs)){
    $Company_Logo = "block";
    $userImg_required = "required";
}
if(in_array('userImg',$unserialize_tmp_inputs)){
    $userImg = "block";
    $userImg_required = "required";
}
if(in_array('userName',$unserialize_tmp_inputs)){
    $userName = "block";
    $userName_required = "required";
}
if(in_array('shortTitle',$unserialize_tmp_inputs)){
    $shortTitle = "block";
    $shortTitle_required = "required";
}
if(in_array('user_short_des',$unserialize_tmp_inputs)){
    $user_short_des = "block";
    $user_short_des_required = "required";
}
if(in_array('location',$unserialize_tmp_inputs)){
    $location = "block";
    $location_required = "required";
}
if(in_array('mobileNumber',$unserialize_tmp_inputs)){
    $mobileNumber = "block";
    $mobileNumber_required = "required";
}
if(in_array('email',$unserialize_tmp_inputs)){
    $email = "block";
    $email_required = "required";
}
if(in_array('websiteLink',$unserialize_tmp_inputs)){
    $websiteLink = "block";
    $websiteLink_required = "required";
}
if(in_array('InstagramLink',$unserialize_tmp_inputs)){
    $InstagramLink = "block";
    $InstagramLink_required = "required";
}
if(in_array('FacebookLink',$unserialize_tmp_inputs)){
    $FacebookLink = "block";
    $FacebookLink_required = "required";
}
if(in_array('user_twiter_link',$unserialize_tmp_inputs)){
    $user_twiter_link = "block";
    $user_twiter_link_required = "required";
}
if(in_array('socialIcon',$unserialize_tmp_inputs)){
    $socialIcon = "block";
    $socialIcon_required = "required";
}
if(in_array('bottomButton',$unserialize_tmp_inputs)){
    $bottomButton = "block";
    $bottomButton_required = "required";
}
if(in_array('user_2nd_number',$unserialize_tmp_inputs)){
    $user_2nd_number = "block";
    $bottomButton_required = "required";
}



?>


<!-- html part -->









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cards</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="editor.css">
    <style>
        body{
            background-color: black;
        }
    </style>
</head>
<body>






    <section style="height: auto;" id="mainconatainer">


        <h2 style="color: aliceblue; margin-bottom: 20px; text-align: center;">Fill your Information to create card</h2>
        <!--  -->
        <div  id="accountContainer">
            <form action="./up.info.database.php?tmp=<?php echo $id; ?>" method="post" enctype="multipart/form-data">

                   <style>
                        .form_display_none{
                            display: none;
                        }
                    </style>
                    
                    <!-- // check user img -->
                    <label for="">*Make sure to fill all the input box!</label><br><br>
                    
                    <div style="display: <?php echo $Company_Logo; ?>;" class="mb-3 form_display_none" >
                        <label style="margin-bottom: 10px;" for="user_color_all_field" class="form-label">Choose your theme color</label>
                        <div style="display: flex; justify-content:center; align-items: center;">
                            <input name="user_color_all_field" value="#007780" type="color" class="form-control" id="user_color_all_field" style="width: 20%">
                            <input name="user_color_all_field_color_OCDES" type="text" class="form-control" placeholder="or, paste your color code here" style="width: 90%">
                        </div>
                        
                    </div>
                    <!-- logo -->
                    <div style="display: <?php echo $Company_Logo; ?>;" class="mb-3 form_display_none" >
                        <label for="logo" class="form-label">Enter your logo here</label>
                        <input name="user_logo" type="file" class="form-control" id="logo">
                        
                    </div>
                    <!-- user img -->
                    <div style="display: <?php echo $userImg; ?>;" class="mb-3 form_display_none" >
                        <label for="userImg" class="form-label">Enter Your Image</label>
                        <input name="userImg" type="file" class="form-control" id="userImg" >
                    </div>
                      
                    
                    <!-- // check user name -->
                    <div style="display: <?php echo $userName; ?>;" class="mb-3 form_display_none">
                        <label for="userName" class="form-label">Enter Your Name</label>
                        <input name="userName" type="text" class="form-control" id="userName"  >
                    </div>
                    <!-- // check short title -->
                    <div style="display: <?php echo $shortTitle; ?>;" class="mb-3 form_display_none">
                        <label for="shortTitle" class="form-label">Enter Your short title</label>
                        <input name="shortTitle" type="text" class="form-control" id="shortTitle"  >
                    </div>
                    <!-- // check department -->
                    <div style="display: <?php echo $department; ?>;" class="mb-3 form_display_none">
                        <label for="department" class="form-label">Enter Your department</label>
                        <input name="department" type="text" class="form-control" id="department"  >
                    </div>
                    <!-- // check short desc -->
                    <div style="display: <?php echo $user_short_des; ?>;" class="mb-3 form_display_none">
                        <label for="user_short_des" class="form-label">Enter Your short description</label>
                        <input name="user_short_des" type="text" class="form-control" id="user_short_des"  >
                    </div>
                    <!-- // check location text -->
                     <div style="display: <?php echo $location; ?>;" class="mb-3 form_display_none">
                        <label for="location" class="form-label">Enter Your Location</label>
                        <input name="location" type="text" class="form-control" id="location"  >
                    </div>
                    <!-- // check Mobile number -->
                    <div style="display: <?php echo $mobileNumber; ?>;" class="mb-3 form_display_none">
                        <label for="mobileNumber" class="form-label">Enter Your Mobile Number</label>
                        <input name="mobileNumber"  type="text" class="form-control" id="mobileNumber" >
                    </div>
                    <!-- // 2nd Mobile number optional -->
                    <div style="display: <?php echo $user_2nd_number; ?>;" class="mb-3 form_display_none">
                        <label for="user_2nd_number" class="form-label">Enter Your 2nd Mobile Number (optional)</label>
                        <input name="user_2nd_number"  type="text" class="form-control" id="user_2nd_number" >
                    </div>
                    <!-- // check email -->
                    <div style="display: <?php echo $email; ?>;" class="mb-3 form_display_none">
                        <label for="email" class="form-label">Enter Your Email</label>
                        <input name="email" type="email" class="form-control" id="email" >
                    </div>
                    <!-- // check website link -->

                    <div style="display: <?php echo $websiteLink; ?>;" class="mb-3 form_display_none">
                        <label for="websiteLink" class="form-label">Enter Your Website Link</label>
                        <input name="websiteLink" type="text" class="form-control" id="websiteLink" >
                    </div>

                    <!-- // check Instagram Link -->
 
                    <div style="display: <?php echo $InstagramLink; ?>;" class="mb-3 form_display_none">
                        <label for="InstagramLink" class="form-label">Enter Your Instagram Link</label>
                        <input name="InstagramLink" type="text" class="form-control" id="InstagramLink" >
                    </div>

                    <!-- // check Facebook Link -->

                    <div style="display: <?php echo $FacebookLink; ?>;" class="mb-3 form_display_none">
                        <label for="FacebookLink" class="form-label">Enter Your Facebook Link</label>
                        <input name="FacebookLink" type="text" class="form-control" id="FacebookLink" >
                    </div>
                    <!-- // check twiter Link -->

                    <div style="display: <?php echo $user_twiter_link; ?>;" class="mb-3 form_display_none">
                        <label for="user_twiter_link" class="form-label">Enter Your Twiter Link</label>
                        <input name="user_twiter_link" type="text" class="form-control" id="user_twiter_link" >
                    </div>

                    <!-- // check social Icons -->

                            <div style="display: <?php echo $socialIcon; ?>;"  class="mb-3 form_display_none">
                                <label class="form-label">Select your social media and provide valid link</label>
                                <!-- icons select option -->
                                <div  class="iconsSelector_div">         
                                    <!--  -->
                                    
                                    <!-- for facebook -->
                                    <div class="form-check chekbox_and_label_center ">
                                        <input name="userInputFill_icons[]" class="form-check-input icons_check_box_opacity" type="checkbox" value="facebook_icon" id="facebook" >
                                        <label class="form-check-label label_for_icons_checkboxs" for="facebook">
                                            <i class="fa-brands fa-facebook fa-xl"></i>
                                        </label>
                                        <input name="facebook_link_icon" class="social_links_icons_input" type="text" placeholder="facebook link">
                                    </div>
                                    <!-- for Instagram -->
                                    <div class="form-check chekbox_and_label_center">
                                        <input name="userInputFill_icons[]" class="form-check-input icons_check_box_opacity" type="checkbox" value="instagram_icon" id="instagram" >
                                        <label class="form-check-label label_for_icons_checkboxs" for="instagram">
                                            <i class="fa-brands fa-instagram fa-xl"></i>
                                        </label>
                                        <input name="instagram_link_icon" class="social_links_icons_input" type="text" placeholder="instagram link">
                                    </div>
                                    <!-- for Twiter -->
                                    <div class="form-check chekbox_and_label_center">
                                        <input name="userInputFill_icons[]" class="form-check-input icons_check_box_opacity" type="checkbox" value="twiter_icon" id="twiter" >
                                        <label class="form-check-label label_for_icons_checkboxs" for="twiter">
                                            <i class="fa-brands fa-twitter fa-xl"></i>
                                        </label>
                                        <input name="twitter_link_icon" class="social_links_icons_input" type="text" placeholder="twitter link">
                                    </div>
                                    <!-- for whatsapp -->
                                    <div class="form-check chekbox_and_label_center">
                                        <input name="userInputFill_icons[]" class="form-check-input icons_check_box_opacity" type="checkbox" value="whatsapp_icon" id="whatsapp" >
                                        <label class="form-check-label label_for_icons_checkboxs" for="whatsapp">
                                            <i class="fa-brands fa-whatsapp fa-xl"></i>
                                        </label>
                                        <input name="whatsapp_link_icon" class="social_links_icons_input" type="text" placeholder="whatsapp number">
                                    </div>
                                    <!-- for Linkedin -->
                                    <div class="form-check chekbox_and_label_center">
                                        <input name="userInputFill_icons[]" class="form-check-input icons_check_box_opacity" type="checkbox" value="Linkedin_icon" id="Linkedin" >
                                        <label class="form-check-label label_for_icons_checkboxs" for="Linkedin">
                                            <i class="fa-brands fa-linkedin fa-xl"></i>
                                        </label>
                                        <input name="linkedin_link_icon" class="social_links_icons_input" type="text" placeholder="linkedin link">
                                    </div>
                                    <!-- for telegram -->
                                    <div class="form-check chekbox_and_label_center">
                                        <input name="userInputFill_icons[]" class="form-check-input icons_check_box_opacity" type="checkbox" value="telegram_icon" id="telegram" >
                                        <label class="form-check-label label_for_icons_checkboxs" for="telegram">
                                            <i class="fa-brands fa-telegram fa-xl"></i>
                                        </label>
                                        <input name="telegram_link_icon" class="social_links_icons_input" type="text" placeholder="telegram link">
                                    </div>
                                    <!-- for youtube -->
                                    <div class="form-check chekbox_and_label_center">
                                        <input name="userInputFill_icons[]" class="form-check-input icons_check_box_opacity" type="checkbox" value="youtube_icon" id="youtube" >
                                        <label class="form-check-label label_for_icons_checkboxs" for="youtube">
                                            <i class="fa-brands fa-youtube fa-xl"></i>
                                        </label>
                                        <input name="youtube_link_icon" class="social_links_icons_input" type="text" placeholder="youtube link">
                                        <input type="hidden" name="userInputFill_icons[]" class="form-check-input icons_check_box_opacity" type="checkbox" value="none" id="youtube" checked>
                                    </div>

                                    <!--  -->   
                                </div>
                                <!-- end icons select option -->
                                <div class="social_icons_input_div">

                                </div>
                                
                            </div>

                    <!-- // check social Icons -->
                    <div style="display: <?php echo $bottomButton; ?>;" class="mb-3 form_display_none">
                        <label for="bottomButton" class="form-label">Enter Your Bottom Button Text </label>
                            <input name="bottomButton_text" type="text" class="form-control" id="bottomButton" placeholder="button text" >
                            <input name="bottomButtonURL" type="text" class="form-control" placeholder="button url" >
                    </div>



                


                                    <!-- for youtube
                                    <div class="form-check chekbox_and_label_center">
                                        <input name="userInputFill_icons[]" class="form-check-input icons_check_box_opacity" type="checkbox" value="youtube" id="youtube" >
                                        <label class="form-check-label label_for_icons_checkboxs" for="youtube">
                                            <i class="fa-brands fa-youtube fa-xl"></i>
                                        </label>
                                    </div> -->

                    

                            
                
                
                

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            

        </div>
        <!--  -->

        


    </section>





<script src="https://kit.fontawesome.com/40d90851b1.js" crossorigin="anonymous"></script>
<script src="../../../js/userDigital_card_editor.js"></script>
<script>
    setTimeout(function () { 
    let left_demo_templete_show = document.querySelector(".left_demo_templete_show");
    left_demo_templete_show.style.marginLeft = "0px";
}, 200);
</script>

</body>
</html>