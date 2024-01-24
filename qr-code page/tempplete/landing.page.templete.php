<?php



?>


    <section id="landing_page_sectioN_main"> 
<style>
#landing_page_sectioN_main{
    width: 340px;
    background-color: <?php echo $theme_color; ?>;
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding-bottom: 10px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
p{
    margin: 0;
    padding: 0;
    color: <?php echo $title_color; ?>;
}
a{
    text-decoration: none;
    color: <?php echo $title_color; ?>;
}
.header_img_top{
    width: 100%;
    height: auto;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding-top: 8px;
}
.header_img_top img{
    width: 95%;
    height: auto;
    border-radius: 10px;
}
.body_div{
    width: 90%;
    height: auto;
    padding: 10px;
}
.body_div .title{
    font-size: 22px;
    font-weight: 500;
}
.body_div .subtitle{
    margin-top: 5px;
}
.body_div .button_div{
    width: 100%;
    display: flex;
    justify-content: start;
    align-items: center;
    gap: 20px;
    margin-top: 15px;
}
.body_div .button_div a{
    /* background-color: blueviolet; */
    box-shadow: 2px 2px 5px black;
    padding: 8px 18px;
    border-radius: 100px;
    transition: .5s;
}
.body_div .button_div a:hover{
    transform: scale(1.1);
}
.body_div .message{
    text-align: justify;
    margin-top: 15px;
    font-size: 15px;
}
</style>

        <div class="header_img_top">
            <img src="../<?php echo $imgpath; ?>imges/body img/<?php echo $body_img; ?>" alt="" srcset="">
        </div>
        <div class="body_div">
            <p class="title"><?php echo $Title; ?></p>
            <p class="subtitle"><?php echo $Subtext; ?></p>
            <div class="button_div">
                <?php if($btn1_unserialize[0]!=""){ ?>
                    <a href="<?php echo $btn1_unserialize[1]; ?>"><?php echo $btn1_unserialize[0]; ?></a>
                <?php } ?>
                <?php if($btn2_unserialize[0]!=""){ ?>
                    <a href="<?php echo $btn2_unserialize[1]; ?>"><?php echo $btn2_unserialize[0]; ?></a>
                <?php } ?>
            </div>
            <p class="message"><?php echo $message_txt; ?></p>
        </div>

    </section>
