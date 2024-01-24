<?php

$background_color_user_choose = $user_selected_all_field_color;


?>


    <div class="mian_card_div">
        <div class="logo_card_div">
            <img src="../Templetes/templete user img/<?php echo $company_logo; ?>" alt="logo">
        </div>
        <div class="header_card_main">
            <div class="heder_img_div">
                <img src="../Templetes/templete user img/<?php echo $user_img; ?>" alt="NO IMG">
            </div>
            <p class="user_name"><?php echo $user_name; ?> </p>
            <p class="designation"><?php echo $short_title; ?></p>
            <p class="department"><?php echo $user_department; ?></p>

        </div>
        <div class="show_inline_icons_div">
            <?php
                if(in_array('facebook_icon',$inline_social_icons_unserialize)){
                    $facebook_icon = "block";
                    echo '<a href="<?php echo $facebook_link ?>"> <i class="fa-brands fa-facebook fa-2xl"></i> </a>';
                }
                if(in_array('instagram_icon',$inline_social_icons_unserialize)){
                    $instagram_icon = "block";
                    echo '<a href="<?php echo $instagram_link ?>"> <i class="fa-brands fa-instagram fa-2xl"></i> </a>';
                } 
                if(in_array('twiter_icon',$inline_social_icons_unserialize)){
                    $twiter_icon = "block";
                    echo '<a href="<?php echo $twitter_link ?>"> <i class="fa-brands fa-twitter fa-2xl"></i> </a>';
                }
                if(in_array('whatsapp_icon',$inline_social_icons_unserialize)){
                    $whatsapp_icon = "block";
                    echo '<a href="<?php echo $mobile_number ?>"> <i class="fa-brands fa-whatsapp fa-2xl"></i> </a>';
                }
                if(in_array('Linkedin_icon',$inline_social_icons_unserialize)){
                    $Linkedin_icon = "block";
                    echo '<a href=" $Linkedin_link "> <i class="fa-brands fa-linkedin fa-2xl"></i> </a>';
                }
                if(in_array('telegram_icon',$inline_social_icons_unserialize)){
                    $telegram_icon = "block";
                    echo '<a href="<?php echo $user_telegram_link ?>"> <i class="fa-brands fa-telegram fa-2xl"></i> </a>';
                }
                if(in_array('youtube_icon',$inline_social_icons_unserialize)){
                    $youtube_icon = "block";
                    echo '<a href="<?php echo $user_youtube_link ?>"> <i class="fa-brands fa-youtube fa-2xl"></i> </a>';
                }
                
            ?>
 
        </div>
        <div class="card_short_desc_div">
            <p class="short_desc_text"><?php echo $user_short_des; ?></p>
        </div>
        <div class="card_mobile_div">
            <div>
                <p style="color: rgb(123, 116, 116); margin-bottom: 5px;">Mobile</p>
                <p ><a href="tel:"><?php echo $mobile_number; ?></a></p>
                <!-- 2nd mobile -->
                <?php if($user_2nd_number!=""){ ?>
                    <p style="color: rgb(123, 116, 116); margin-bottom: 5px; margin-top: 5px">Work</p>
                    <p ><a href="tel:"><?php echo $user_2nd_number; ?></a></p>
                <?php } ?>
            </div>
        </div>
        <div class="card_email_div">
            <div>
                <p style="color: rgb(123, 116, 116); margin-bottom: 5px;">Email</p>
                <p><a href="mailto:/<?php echo $e_mail ?>"><?php echo $e_mail ?></a></p>
            </div>
        </div>
        <div class="card_email_div">
            <div style="border: none;">
                <p style="color: rgb(123, 116, 116); margin-bottom: 5px;">Website</p>
                <p><a href="<?php echo $website_link; ?>"><?php echo $website_link; ?></a></p>
            </div>
        </div>
        <a href="tel:"><?php echo $mobile_number; ?>
            <div class="Add_contact_div">
                <i class="fa-solid fa-user-plus fa-lg"></i>
            </div>
        </a>

    <script src="https://kit.fontawesome.com/40d90851b1.js" crossorigin="anonymous"></script>
    </div>
