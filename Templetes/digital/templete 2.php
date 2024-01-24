<?php
$background_color_user_choose = $user_selected_all_field_color;

?>

<div class="templete_section_div_main">
    <style>

        p{
            padding: 0;
            margin: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            text-align: center;
            width: 95%;
            
        }
        a{
            text-decoration: none;
            color: white;
        }
        i{
            color: <?php echo $background_color_user_choose ?>;
        }
        .templete_section_div_main{
            width: 340px;
            height: auto;
            background-color: rgb(235, 235, 235);
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            box-shadow: 2px 2px 10px #00000073;
        }
        .header_part{
            width: 100%;
            height: 230px;
            display: flex;
            flex-direction: column;
        }
        .header_background_div{
            width: 100%;
            height: 150px;
            background-color: rgb(0, 119, 128);
            border-radius: 0% 0% 40% 40%;
        }
        .header_background_div img{
            width: 30px;
            height: 30px;
            padding: 25px;
        }

        .header_img_div{
            width: 140px;
            height: 140px;
            background-color: black;
            border-radius: 100px;
            position: absolute;
            margin: 80px 0px 0px 95px;
            border: 4px solid white;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            overflow: hidden;
        }
        .header_img_div img{
            width: 105%;
            height: 105%;
        
        }
        .about_div_main{
            width: 100%;
            height: auto;
            display: flex;
            justify-content: start;
            align-items: center;
            flex-direction: column;
            
        }
        .about_div_main .full_name_txt{
            font-size: 24px;
            font-weight: 550;
        }
        .about_div_main .department{
            font-size: 17px;
            font-weight: 570;
            
            
        }
        .before_short_desc_hr{
            width: 10%;
            height: .0px;
            background-color: black;
        }
        .about_div_main .short_desc_txt{
            margin-top: 0px;
            width: 95%;
            font-size: 16px;
            color: rgb(114, 114, 114);
        }
        .body_part_div_main{
            width: 100%;
            height: auto;

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 10px;
            padding: 15px 0px;
        }
        .body_part_div_main .inner_div p{
            font-weight: 600;
        }
        .body_part_div_main .inner_div{
            width: 90%;
            height: 50px;
            display: flex;
            justify-content: start;
            align-items: center;
            gap: 10px;
        }
        .body_part_div_main .inner_div .logo{
            width: 42px;
            height: 42px;
            border-radius: 100px;
            background-color: rgb(235, 235, 235);
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.338);
        }
        .body_part_div_main .inner_div .links{
            width: 240px;
            overflow: hidden;
            color: rgb(79, 79, 79);
            
        }
        .body_part_div_main .inner_div .links p{
            text-align: left;
        }

        .bottom_button{
            width: 100%;
            height: 45px;
            background-color: <?php echo $background_color_user_choose ?>;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            margin-top: 5px;
        }
        .show_inline_icons_div{
            width: 95%;
            height: 70px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            gap: 15px;
        }
        .company_logo_first{
            width: 40px;
            position: absolute;
            margin: 20px;
        }
        .user_choose_colors{
            background-color: <?php echo $background_color_user_choose ?>;
        }
    </style>

    
    <div class="header_part">
        <img class="company_logo_first" src="../Templetes/templete user img/logo/<?php echo $company_logo ?>" alt="no img" alt="">
        <div class="header_background_div user_choose_colors">
            
        </div>
        <div class="header_img_div">
            <img src="../Templetes/templete user img/<?php echo $user_img ?>" alt="no img">
        </div>
    </div>
    <!-- about -->
    <div class="about_div_main">
        <!-- name -->
        <p class="full_name_txt"> <?php echo $user_name ?> </p>
        <!-- designation -->
        <p class="designation_txt" style="font-size: 14px;"><?php echo $short_title ?></p>
        <!-- department -->
        <p class="department"><?php echo $user_department ?></p>
        <hr class="before_short_desc_hr">
        <!-- short desc -->
        <p class="short_desc_txt"><?php echo $user_short_des ?></p>

    </div>
    <!-- body part -->
    <div class="body_part_div_main">
        <!-- phone -->
        <div class="inner_div">
            <a href="tel:<?php echo $mobile_number; ?>"><div class="logo"><i class="fa-solid fa-phone fa-lg"></i></div></a>
            <div class="links">
                <p><?php echo $mobile_number ?></p>
            </div>
        </div>
        <!-- email -->
        
        <div class="inner_div">
            <a href="mailto:/<?php echo $e_mail; ?>"><div class="logo"><i class="fa-solid fa-envelope fa-lg"></i></div></a>
            <div class="links">
                <p><?php echo $e_mail ?></p>
            </div>
        </div>
        <!--website  -->
        <?php if ($website_link!= ""){ ?>
            <div class="inner_div"> 
                <a href="<?php echo $website_link; ?>"><div class="logo"><i class="fa-solid fa-globe fa-xl"></i></div></a>
                <div class="links">
                    <p><?php echo $website_link ?></p>
                </div>
            </div>
        <?php } ?>
        <!--  -->
    </div>
    <!-- inline icons div -->
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


    <!-- button -->
    <a href="<?php echo $bottom_button_array_unserialize[1]; ?>" class="bottom_button">
        <p><?php echo $bottom_button_array_unserialize[0]; ?></p>
    </a>




    <script src="https://kit.fontawesome.com/40d90851b1.js" crossorigin="anonymous"></script>
</div>