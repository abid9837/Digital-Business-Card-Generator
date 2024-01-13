<?php



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/templete 2.css">
</head>
<body>
    

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
            color: rgb(0, 119, 128);
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

        .bottom_button{
            width: 100%;
            height: 45px;
            background-color: rgb(0, 119, 128);
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
    </style>

    
    <div class="header_part">
        <div class="header_background_div">
            <img src="./img/logo.png" alt="logo">
        </div>
        <div class="header_img_div">
            <img src="./img/DP.png" alt="Photo">
        </div>
    </div>
    <!-- about -->
    <div class="about_div_main">
        <!-- name -->
        <p class="full_name_txt">MD.Abidur Rahman </p>
        <!-- designation -->
        <p class="designation_txt" style="font-size: 14px;">Senior Developer</p>
        <!-- department -->
        <p class="department">Computer Science</p>
        <hr class="before_short_desc_hr">
        <!-- short desc -->
        <p class="short_desc_txt">I am a professional web developer. I can make any kind of system from your choice.</p>

    </div>
    <!-- body part -->
    <div class="body_part_div_main">
        <!--  -->
        <div class="inner_div">
            <div class="logo"><i class="fa-solid fa-phone fa-lg"></i></div>
            <div class="links">
                <p>www.jufgurgesrgethrethretjerjhgih</p>
            </div>
        </div>
        <!--  -->
        <div class="inner_div">
            <div class="logo"><i class="fa-solid fa-envelope fa-lg"></i></div>
            <div class="links">
                <p>www.jufgurgesrgethrethretjerjhgih</p>
            </div>
        </div>
        <!--  -->
        <div class="inner_div">
            <div class="logo"><i class="fa-solid fa-globe fa-xl"></i></div>
            <div class="links">
                <p>www.jufgurgesrgethrethretjerjhgih</p>
            </div>
        </div>
        <!--  -->
    </div>
    <!-- inline icons div -->
    <div class="show_inline_icons_div">
            <!-- fb -->
            <a href="#"> <i class="fa-brands fa-facebook fa-2xl"></i> </a>
            <!-- twitter -->
            <a href="#"> <i class="fa-brands fa-twitter fa-2xl"></i> </a>
            <!-- insta -->
            <a href="#"> <i class="fa-brands fa-instagram fa-2xl"></i> </a>
            <!-- whats app -->
            <a href="#"> <i class="fa-brands fa-whatsapp fa-2xl"></i> </a>
    </div>


    <!-- button -->
    <a href="" class="bottom_button">
        <p>Download CV</p>
    </a>




    <script src="https://kit.fontawesome.com/40d90851b1.js" crossorigin="anonymous"></script>
</div>

</body>
</html>