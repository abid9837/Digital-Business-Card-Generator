
<?php
$background_color_user_choose = $user_selected_all_field_color;

?>


    <div class="card_div_main_body">
        <style>
            p{
                margin: 0;
                padding: 0;
            }
            .card_div_main_body{
                width: 340px;
                background-color: rgb(246, 246, 246);
                border-radius: 10px;
                overflow: hidden;
                box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.249);
                font-family: Arial, Helvetica, sans-serif;
                z-index: 1;
            }
            .logo_div_main{
                width: 100%;
                height: 200px;
                background-color: <?php echo $background_color_user_choose ?>;
                display: flex;
                justify-content: center;
                align-items: start;
            }
            .logo_div_main img{
                max-width: 180px;
                padding-top: 40px;
                
            }
            .card_body_main{
                width: 100%;
                height: auto;
                border-radius: 12px;
                margin-top: -15px;
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: rgb(246, 246, 246);
            }
            .card_img_div{
                width: 110px;
                height: 110px;
                background-color: rgb(0, 0, 0);
                border-radius: 10px;
                border: 3.5px solid rgb(231, 231, 231);
                margin-top: -60px;
                display: flex;
                justify-content: center;
                align-items: center;
                overflow: hidden;
            }
            .card_img_div img{
                width: 105%;
                height: auto;

            }
            .user_name_text_div{
                width: 100%;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                padding-top: 10px;
            }
            a{
                text-decoration: none;
                color: black;
            }
            .user_name{
                font-size: 25px;
                color: black;
                font-weight: 500;
                
            }
            .user_designation{
                font-size: 16px;
                color: rgb(128, 128, 128);
                padding-top: 10px;
            }
            .user_designationP{
                margin-top: 5px;
            }
            .user_departmenta{
                font-size: 17px;
            }
            .user_departmentP{
                margin-top: 5px;
            }
            .social_icons_inline{
                width: 100%;
                height: auto;
                padding: 10px 0px;
                display: flex;
                justify-content: center;
                align-items: center;
                gap: 10px;
                flex-wrap: wrap;
                padding-top: 25px;
                padding-bottom: 30px;
            }
            .user_body_part_div{
                width: 100%;
                display: flex;
                flex-direction: column;
                justify-content: start;
                align-items: center;
                padding: 10px 0px;
                gap: 15px;
            }
            .user_contact_div{
                width: 95%;
                display: flex;
                justify-content: start;
                align-items: center;
            }
            .icons_div_body{
                width: 35px;
                height: 35px;

                border-radius: 10px;
                border: 3px solid rgb(236, 236, 236);
                display: flex;
                justify-content: center;
                align-items: center;
                transition: .3s;
            }
            .icons_div_body:hover{
                transform: scale(1.1);
            }
            .icons_div_Text_div{
                width: 260px;
                margin-left: 20px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-content: start;
                gap: 3px;
            }
            .icons_div_Text_div .title{
                color: rgb(128, 128, 128);
                font-size: 14px;
            }
            .icons_div_Text_div .text{
                width: 260px;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
                display: inline-block;
            }
            .icons_div_body i{
                color: <?php echo $background_color_user_choose ?>;
            }
            .add_to_contact_div_bottom{
                display: flex;
                justify-content: center;
                align-items: center;
                gap: 10px;
                width: 100%;
                height: 50px;
                background-color: <?php echo $background_color_user_choose ?>;
                color: white;
            }
            .add_to_contact_div_bottom i{
                color: aliceblue;
            }
            .social_icons_inline a i{
                color: <?php echo $background_color_user_choose ?>;
            }

        </style>


        <div class="logo_div_main">
            <img src="../Templetes/templete user img/logo/<?php echo $company_logo ?>" alt="">
        </div>
        <div class="card_body_main">
            <div class="card_img_div">
                <img src="../Templetes/templete user img/<?php echo $user_img ?>" alt="">
            </div>
        </div>
        <div class="user_name_text_div">
            <p style="text-align: center;"><a href="#" class="user_name"><?php echo $user_name ?></a></p>
            <p class="user_designationP"><a href="#" class="user_designation"><?php echo $short_title ?></a></p>
            <p class="user_departmentP"><a href="#" class="user_departmenta"><?php echo $user_department ?></a></p>
        </div>
        <div class="social_icons_inline">
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
        <!--  -->
        <div class="user_body_part_div">
            <div class="user_contact_div">
                <div class="icons_div_body"> <a href="tel:<?php echo $mobile_number; ?>"><i class="fa-solid fa-phone"></i></a> </div>
                <div class="icons_div_Text_div">
                    <p class="text"><?php echo $mobile_number; ?></p>
                    <p class="title">Personal</p>
                </div>
            </div>
            <!--  -->
            <div class="user_contact_div">
                <div class="icons_div_body"> <a href="mailto:/<?php echo $e_mail; ?>"><i class="fa-regular fa-envelope"></i></a> </div>
                <div class="icons_div_Text_div">
                    <p class="text"><?php echo $e_mail; ?></p>
                    <p class="title">Personal</p>
                </div>
            </div>
            <!--  -->
            <div class="user_contact_div">
                <div class="icons_div_body"> <a href="<?php echo $website_link; ?>"><i class="fa-solid fa-globe"></i></i></a> </div>
                <div class="icons_div_Text_div">
                    <p class="text"><?php echo $website_link; ?></p>
                    <p class="title">Work</p>
                </div>
            </div>
            <!--  -->
            <div class="user_contact_div">
                <div class="icons_div_body"> <a href="https://maps.google.com/maps?q=<?php echo $location_address ?>"><i class="fa-solid fa-location-dot"></i></a> </div>
                <div class="icons_div_Text_div">
                    <p class="text"><?php echo $location_address ?></p>
                    <p class="title">Present</p>
                </div>
            </div>


        </div>
        <!--  -->
        <a href="tel:<?php echo $mobile_number; ?>">
            <div class="add_to_contact_div_bottom">
                <i class="fa-solid fa-user-plus fa-lg"></i>
                <p>Add to Contact</p>
            </div>
        </a>

        <script src="https://kit.fontawesome.com/40d90851b1.js" crossorigin="anonymous"></script>
    </div>
