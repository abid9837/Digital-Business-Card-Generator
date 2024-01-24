<?php
include "../../conn.inc.php";
include "../../check login.inc.php";
include "../../url.inc.php";
$permission_to_require = '';
$permission_to_require_QR_CODES = '';


if( isset($_GET['qr_link']) && !empty($_GET['qr_link']) ){
    $qr_link_variable = base64_decode ($_GET['qr_link']);

    // check templete time delay
    $templete_time_sql = "SELECT * FROM `create_qr_code` WHERE link_number='$qr_link_variable' ";
    $templete_time_query = mysqli_query($conn,$templete_time_sql);
    $templete_time_numRows = mysqli_num_rows($templete_time_query);
    $templete_time_fetchAssoc = mysqli_fetch_assoc($templete_time_query);
    if( $templete_time_fetchAssoc['payment_status']=='active' ){
        $permission_to_require = "ok";
        // include all variables for cards
        include "../variables/qr variable .inc.php";

        $templete_name = $templete_time_fetchAssoc['templete_name'];
    }else{
        
    }

    
    
    
}else{
    header("Refresh:0; url=$go_to_templete_page");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My templete</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.templeteshow.css">
</head>
<body>
    <section id="body_section_main">
        <?php 
            if($permission_to_require=='ok'){
                $imgpath = "";
                require("../tempplete/$templete_name");
            }else{
            ?>
                <p style="color:red;">Templete Limit Expired</p>
                <?php echo $templete_name; ?>
                <a href="../../templete-page/re-payment/re.payment.php?link=<?php echo $preview_templete_uid; ?>" class="btn btn-info">Re-payment</a>
            <?php
            }
            
        ?>
    </section>
    <style>
        body{
            background-color: white;
        }
    </style>
</body>
</html>