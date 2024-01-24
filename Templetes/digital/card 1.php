<div class="mainContainer">
        <div class="imgContainer">
            <div>
                <img class="imgUSer" src="../Templetes/templete user img/<?php echo $user_img ?>" alt="no img">
            </div>
            <h2 style="text-align: center;"> <?php echo $user_name ?> </h2>
            <p><?php echo $short_title ?></p>
        </div>
        <!--  -->
        <!--  -->
        <div class="bodyContainer">
            <!--  -->
            <!--  -->
            <style>
                .mainContainer{
                    width: 310px;
                    height: 600px;
                    background-color: #2D3035;
                    border-radius: 10px;
                    overflow: hidden;
                }
                .imgContainer{
                    width: 100%;
                    height: 240px;
                    background-color: #3D4045;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    flex-direction: column;
                    color: white;
                }
                .imgContainer div{
                    width: 130px;
                    height: 130px;
                    border-radius: 100px;
                    overflow: hidden;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    border: 6px solid rgb(35, 35, 35);
                }
                .imgContainer div .imgUSer{
                    width: 130px;
                }
                .imgContainer h2{
                    padding: 0;
                    margin: 0;
                    margin-top: 10px;
                }
                .imgContainer p{
                    padding: 0;
                    margin: 0;
                }
                .bodyContainer{
                    width: 310;
                    height: 360px;
                    padding: 15px ;
                    display: flex;
                    justify-content: start;
                    align-items: center;
                    flex-direction: column;
                }
                .bodyContainer a{
                    text-decoration: none;
                    display: flex;
                    justify-content: start;
                    align-items: center;
                    gap: 10px;
                    color: rgb(234, 234, 234);
                    width: 100%;  
                }
                .bodyContainer a p{
                    width: 260px;
                    word-wrap: break-word;   
                }
                .bodyContainer .button{
                    width: 310px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    width: 80%;
                    margin-top: 10px;
                }
                .bodyContainer .button a{
                    padding: 10px 20px;
                    border-radius: 100px;
                    background-color: aqua;
                    text-decoration: none;
                    color: black;
                    text-align:center;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
            </style>
            <!--  -->
            <!-- website -->
            <a href="<?php echo $website_link ?>">
                <i class="fa-solid fa-desktop fa-lg"></i>
                <p><?php echo $website_link ?></p>
            </a>
            <!-- email -->
            <a href="mailto:<?php echo $e_mail ?>">
                <i class="fa-solid fa-envelope fa-lg"></i>
                <p><?php echo $e_mail ?></p>
            </a>
            <!-- phone -->
            <a href="tel:<?php echo $mobile_number ?>">
                <i class="fa-solid fa-phone fa-lg"></i>
                <p><?php echo $mobile_number ?></p>
            </a>
            <!-- facebook -->
            <a href="<?php echo $facebook_link ?>">
                <i class="fa-brands fa-facebook fa-lg"></i>
                <p><span><?php echo $facebook_link ?></span></p>
            </a>
            <!-- instagram -->
            <a href="<?php echo $instagram_link ?>">
                <i class="fa-brands fa-instagram fa-lg"></i>
                <p><span><?php echo $instagram_link ?></span></p>
            </a>
             <!-- button -->
            <div class="button">
                <a href="<?php echo $bottom_button_array_unserialize[1]; ?>">
                    <?php echo $bottom_button_array_unserialize[0]; ?>
                </a>
            </div>
            <!--  -->
            <!--  -->
        </div>
        <script src="https://kit.fontawesome.com/40d90851b1.js" crossorigin="anonymous"></script>
    </div>