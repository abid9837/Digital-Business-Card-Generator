<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>facebook page </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/facebook page.templete.css">
    <style>#main_container_div{
    width: 330px;
    height: auto;
    background-color: rgb(241, 241, 241);
    border-radius: 10px;
    padding: 20px 10px;
}
p{
    padding: 0;
    margin: 0;
}
#logo{
    width: 80px;
    border-radius: 5px;
}
#title_p{
    font-size: 20px;
    margin-top: 10px;
    line-height: 25px;
    font-weight: 500;
}
#fb_logo{
    width: 180px;
    margin-top: 10px;
   
}a{
    text-decoration: none;
    color: rgb(26, 26, 26);
    transition: .5s;
    
}
#fb_follow_btn{
    padding: 3px 10px ;
    background-color: #1778F2;
    margin-top: -5px;
    border-radius: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 5px;
    color: white;
    
    
}
#fb_follow_btn:hover{
    transform: scale(1.04);
}
.common_flex{
    display: flex;
    justify-content: start;
    align-items: center;
}
.common_flex p{
    margin-left: 10px;
    margin-top: -5px;
}
#body_img{
    width: 100%;
    margin-top: 20px;
    border-radius: 10px;
}







</style>
</head>
<body>
    <section id="main_container_div">
            <img id="logo" src="../<?php echo $imgpath; ?>imges/logo/<?php echo $logo; ?>" alt="">
            <p id="title_p"><?php echo $Title; ?> </p>
            <img id="fb_logo" src="../<?php echo $imgpath; ?>imges/logo/Facebook_Logo_(2019).svg.png" alt="" srcset="">
            <br>
            <br>
            <div class="common_flex">
                <a id="fb_follow_btn" href=""><i class="fa-solid fa-thumbs-up fa-sm"></i> Follow</a>
                <p>This page has <?php echo $fb_page_follower; ?> follower </p>
            </div>
            <img id="body_img" src="../<?php echo $imgpath; ?>imges/body img/<?php echo $body_img; ?>" alt="">
            


            <script src="https://kit.fontawesome.com/40d90851b1.js" crossorigin="anonymous"></script>
    </section>

</body>
</html>