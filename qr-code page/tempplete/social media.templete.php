<?php


?>


    <section id="social_media_templete_main_body">
        <style>  
            #social_media_templete_main_body{
                width: 340px;
                height: auto;
                border-radius: 10px;
                background-color: rgb(239, 239, 239);
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 20px;
                font-family: sans-serif;
                box-shadow: 2px 2px 7px rgba(0, 0, 0, 0.225);
            }
            p{
                margin: 0;
                padding: 0;
            }
            #social_media_templete_main_body .header{
                width: 100%;
                display: flex;
                flex-direction: column;
            }
            #social_media_templete_main_body .header .title{
                color: <?php echo $title_color; ?>;
                font-size: 22px;
                font-weight: 600;
            }
            .body_img {
                width: 100%;
                margin-top: 20px;
                border-radius: 10px;
            }

            #social_media_templete_main_body .Message_txt{
                font-size: 16px;
                margin-top: 20px;
                line-height: 25px;
                text-align: justify;
            }
            #social_media_templete_main_body .icons_link{
                width: 100%;
                display: flex;
                flex-wrap: wrap;
                flex-direction: row;
                gap: 22px;
                justify-content: center;
                align-items: center;
                margin-top: 20px;
            }
            .Subtext{
                color: rgb(111, 111, 111);
                font-size: 14px;
                margin-top: 5px;
            }
            .icons_div_main{
                width: 40px;
                height: 40px;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 100px;
                box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.273);
                transition: .4s;
            }
            .icons_div_main:hover{
                transform: scale(1.1);
                box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.56);
                background-color: #14E2A4;
                
            }
            .icons_div_main:hover i{
                color: white;
            }
            a{
                text-decoration: none;
            }
            .icons_div_main i{
                color: rgb(13, 13, 13);
            }
            .header_logo_img{
                width: 80px;
                border-radius: 5px;
                margin-bottom: 10px;
            }

        </style>
        <!-- header -->
        <div class="header">
            <?php if($logo!=''){ ?>
                <img class="header_logo_img" src="../<?php echo $imgpath; ?>imges/logo/<?php echo $logo; ?>" alt="">
            <?php } ?>
            <p class="title"> <?php echo $Title; ?> </p>
            <?php if($body_img!=''){ ?>
                <img class="body_img" src="../<?php echo $imgpath; ?>imges/body img/<?php echo $body_img; ?>" alt="">
            <?php } ?>
        </div>
        <!-- body -->
        <div class="header body">
            <p class="Message_txt"><?php echo $message_txt; ?></p>
            <p class="Subtext"><?php echo $Subtext; ?></p>
        </div>
        <div class="header icons_link">
            <!-- facebook -->
            <?php if($Facebook_username!=''){ ?>
                <a href="https://">
                    <div class="icons_div_main">
                        <i class="fa-brands fa-facebook fa-lg"></i>
                    </div>
                </a>
            <?php } ?>
            <!-- instagram -->
            <?php if($Instagram_username!=''){ ?>
                <a href="https://">
                    <div class="icons_div_main">
                        <i class="fa-brands fa-instagram fa-lg"></i>
                    </div>
                </a>
            <?php } ?>
            <!-- Twitter  -->
            <?php if($Twitter_Username!=''){ ?>
                <a href="https://">
                    <div class="icons_div_main">
                        <i class="fa-brands fa-twitter fa-lg"></i>
                    </div>
                </a>
            <?php } ?>
            <!-- Pinterest  -->
            <?php if($Pinterest_Username!=''){ ?>
                <a href="https://">
                    <div class="icons_div_main">
                        <i class="fa-brands fa-pinterest fa-lg"></i>
                    </div>
                </a>
            <?php } ?>
            <!-- Linkedin  -->
            <?php if($Linkedin_Username!=''){ ?>
                <a href="https://">
                    <div class="icons_div_main">
                        <i class="fa-brands fa-linkedin-in fa-lg"></i>
                    </div>
                </a>
            <?php } ?>
            <!-- Whatsapp  -->
            <?php if($Whatsapp_number!=''){ ?>
                <a href="tel:">
                    <div class="icons_div_main">
                        <i class="fa-brands fa-whatsapp fa-lg"></i>
                    </div>
                </a>
            <?php } ?>
            <!-- Youtube  -->
            <?php if($Youtube_channel!=''){ ?>
                <a href="https://">
                    <div class="icons_div_main">
                        <i class="fa-brands fa-youtube fa-lg"></i>
                    </div>
                </a>
            <?php } ?>
            <!-- Snapchat  -->
            <?php if($Snapchat_channel!=''){ ?>
                <a href="https://">
                    <div class="icons_div_main">
                        <i class="fa-brands fa-snapchat fa-lg"></i>
                    </div>
                </a>
            <?php } ?>
            <!-- Tiktok   -->
            <?php if($Tiktok_channel!=''){ ?>
                <a href="https://">
                    <div class="icons_div_main">
                        <i class="fa-brands fa-tiktok fa-lg"></i>
                    </div>
                </a>
            <?php } ?>
            <!-- Website   -->
            <?php if($Website_URL!=''){ ?>
                <a href="https://">
                    <div class="icons_div_main">
                        <i class="fa-solid fa-globe fa-lg"></i>
                    </div>
                </a>
            <?php } ?>

        </div>

    <script src="https://kit.fontawesome.com/40d90851b1.js" crossorigin="anonymous"></script>
    </section>