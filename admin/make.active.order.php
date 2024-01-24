<?php
include "../conn.inc.php";
include "../check login.inc.php";
include "../url.inc.php";
admin_login();

if(isset($_GET['trans'])){
    echo $trans = $_GET['trans'];
    // link number find and add to qr code link
    $link_number_sql = "SELECT * FROM `create_cards` WHERE payment_code='$trans' ";
    $link_number_query = mysqli_query($conn,$link_number_sql);
    $link_number_numRows = mysqli_num_rows($link_number_query);
    $link_number_fetchAssoc = mysqli_fetch_assoc($link_number_query);

    $link_number = $link_number_fetchAssoc['link_number'];
    $link_number_encode = base64_encode($link_number);

    

    $QR_src = "https://chart.googleapis.com/chart?cht=qr&chs=180x180&chl=$QR_code_show_page?id=$link_number_encode";
    $OR_visit = "$QR_code_show_page?id=$link_number_encode";

    // qr save in folder and DB
    $imageName = "My qr code $link_number_encode.jpg";
    $destinationPath = "../accounts/qr imgs/";

    $imageContent = file_get_contents($QR_src);
    file_put_contents($destinationPath . $imageName, $imageContent);



    // cards db
    $update_sql = "UPDATE `create_cards` SET payment_status='active', QR_src='$QR_src', QR_visit='$OR_visit', QE_image_name='$imageName' WHERE payment_code='$trans'  ";
    $update_query = mysqli_query($conn,$update_sql);
    if($update_query){
        header("Refresh:0; url=$admin_panel_page");
        
    }
    
}




?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="https://chart.googleapis.com/chart?cht=qr&chs=180x180&chl=hello" alt="">
</body>
</html> -->