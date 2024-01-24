<?php




?>


    <div class="mian_card_div">
        <style>
            
            p{
                margin: 0;
                padding: 0;
                color: white;
                text-align: center;
            }a{
                text-decoration: none;
                color: rgb(36, 36, 36);
            }
            .mian_card_div{
                width: 340px;
                height: auto;
                background-color: rgb(247, 247, 247);
                border-radius: 10px;
                box-shadow: 2px 2px 10px rgba(66, 64, 64, 0.5);
                font-family: sans-serif;
                overflow: hidden;
            }
            .header_card_main{
                width: 100%;
                height: 280px;
                background-color: rebeccapurple;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding-top: 4px;
                padding-bottom: 10px;
            }
            .logo_card_div{
                width: 50px;
                height: 50px;
                position: absolute;
                margin: 10px;
                border-radius: 10px;
                display: flex;
                justify-content: center;
                align-items: center;
                overflow: hidden;
            }
            .logo_card_div img{
                width: 100%;
                height: auto;
            }
            .heder_img_div{
                width: 120px;
                height: 120px;
                background-color: rgb(243, 243, 243);
                border-radius: 100px;
                display: flex;
                justify-content: center;
                align-items: center;
                overflow: hidden;
            }
            .heder_img_div img{
                width: 100%;
                height: auto;
            }
            .user_name{
                font-size: 25px;
                margin-top: 10px;
            }
            .designation{
                font-size: 13px;
                margin-top: 5px;
            }
            .department{
                font-size: 14px;
                margin: 5px;
            }

            .show_inline_icons_div{
                width: 100%;
                height: auto;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-wrap: wrap;
                gap: 20px;
                margin-top: -23px;
            }

            .show_inline_icons_div a{
                width: 45px;
                height: 45px;
                background-color: rgb(247, 247, 247);
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 100%;
                box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.396);
            }
            .card_short_desc_div{
                width: 100%;
                height: auto;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .short_desc_text{
                margin-top: 25px;
                text-align: left;
                line-height: 24px;
                color: black;
                border-bottom: 1px solid rgb(160, 160, 160);
                width: 95%;
                padding-bottom: 20px;

            }
            .card_mobile_div{
                width: 100%;
                height: auto;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .card_mobile_div div{
                width: 95%;
                border-bottom: 1px solid black;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: start;
                padding-top: 20px;
                padding-bottom: 20px;
                
            }
            .card_mobile_div div p{
                color: black;
            }
            .card_email_div{
                width: 100%;
                display: flex;
                justify-content: center;
                align-content: center;
            }
            .card_email_div div{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-content: start;
                border-bottom: 1px solid black;
                width: 95%;
                padding: 20px 0px;
            }
            .card_email_div div p{
                text-align: left;
                color: black;
            }
            .Add_contact_div{
                width: 60px;
                height: 60px;
                background-color: rebeccapurple;
                border-radius: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                position: absolute;
                margin: -110px 0px 0px 260px;
                box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.485);
                color: white;
            }

        </style>
        <!--  -->
        <!--  -->
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
                ?>
                <a href="<?php echo $facebook_link ?>"> <i class="fa-brands fa-facebook fa-2xl"></i> </a>
                <?php
            }
            if(in_array('instagram_icon',$inline_social_icons_unserialize)){
                ?>
                <a href="<?php echo $instagram_link ?>"> <i class="fa-brands fa-instagram fa-2xl"></i> </a>
                <?php
            } 
            if(in_array('twiter_icon',$inline_social_icons_unserialize)){
                ?>
                <a href="<?php echo $twitter_link ?>"> <i class="fa-brands fa-twitter fa-2xl"></i> </a>
                <?php
            }
            if(in_array('whatsapp_icon',$inline_social_icons_unserialize)){
                ?>
                <a href="<?php echo $mobile_number ?>"> <i class="fa-brands fa-whatsapp fa-2xl"></i> </a>
                <?php
            }
            if(in_array('Linkedin_icon',$inline_social_icons_unserialize)){
                ?>
                <a href="<?php echo $Linkedin_link ?>"> <i class="fa-brands fa-linkedin fa-2xl"></i> </a>
                <?php
            }
            if(in_array('telegram_icon',$inline_social_icons_unserialize)){
                ?>
                <a href="<?php echo $user_telegram_link ?>"> <i class="fa-brands fa-telegram fa-2xl"></i> </a>
                <?php
            }
            if(in_array('youtube_icon',$inline_social_icons_unserialize)){
                ?>
                <a href="<?php echo $user_youtube_link ?>"> <i class="fa-brands fa-youtube fa-2xl"></i> </a>
                <?php
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
                <p style="color: rgb(123, 116, 116); margin-bottom: 5px; margin-top: 5px">Work</p>
                <p ><a href="tel:"><?php echo $user_2nd_number; ?></a></p>
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
        <a href="tel:<?php echo $mobile_number; ?>">
            <div class="Add_contact_div">
                <i class="fa-solid fa-user-plus fa-lg"></i>
            </div>
        </a>

    <script src="https://kit.fontawesome.com/40d90851b1.js" crossorigin="anonymous"></script>
    </div>
