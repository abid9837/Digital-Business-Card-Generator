<?php

include "../conn.inc.php";
include "../url.inc.php";
include "../check login.inc.php";
user_login_for_templetes_page();



if(isset($_SESSION['link_number'])){
    $preview_templete_uid = $_SESSION['link_number'];
    $tmp_uid = $_SESSION['tmp_uid'];
    // get templete name 
    $templete_sql = "SELECT * FROM `templetes` WHERE id='$tmp_uid'";
    $templete_query = mysqli_query($conn,$templete_sql);
    $templete_numRows = mysqli_num_rows($templete_query);
    $templete_fetchAssoc = mysqli_fetch_assoc($templete_query);
    $templete_name = $templete_fetchAssoc['temp_name'];
    

    include "../tmp.variables.php";


}else{
    header("Refresh:0; url=$go_to_templete_page");
    
}
// show user info
// link_number genarate
// $link_number_sql = "SELECT * FROM `create_cards` ORDER BY id DESC LIMIT 1";
// $link_number_query = mysqli_query($conn,$link_number_sql);
// $link_number_numRows = mysqli_num_rows($link_number_query);
// $link_number_fetchAssoc = mysqli_fetch_assoc($link_number_query);
// $new_link_number = $link_number_fetchAssoc['link_number']+1;


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Templete Preview</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/templete.preview.css">

    <style>

    </style>
</head>
<body>
    <section id="section_body_main">
        <?php require("../Templetes/digital/$templete_name.php"); ?>

        <div class="order_now_btn_div">
            <a href="./make payment.php" class="btn btn-success">Order Now</a>
        </div>


    </section>
<style>
            body{
            background-color: rgb(222, 222, 222);
        }
</style>
</body>
</html>


