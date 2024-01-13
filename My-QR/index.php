<?php
include "../conn.inc.php";
include "../check login.inc.php";
include "../url.inc.php";
$permission_to_require = '';



if( isset($_GET['id']) && !empty($_GET['id']) ){
    $preview_templete_uid = base64_decode ($_GET['id']);

    // check templete time delay
    $templete_time_sql = "SELECT * FROM `create_cards` WHERE link_number='$preview_templete_uid' ";
    $templete_time_query = mysqli_query($conn,$templete_time_sql);
    $templete_time_numRows = mysqli_num_rows($templete_time_query);
    $templete_time_fetchAssoc = mysqli_fetch_assoc($templete_time_query);
    if( $templete_time_fetchAssoc['payment_status']=='active' ){
        $permission_to_require = "ok";
        // include all variables for cards
        include "../tmp.variables.php";
        $tmp_UID = $show_user_temp_data_fetchAssoc['templete_uid'];

        // tmp name get
        $get_tmp_sql = "SELECT * FROM `templetes` WHERE id='$tmp_UID'";
        $get_tmp_query = mysqli_query($conn,$get_tmp_sql);
        $get_tmp_fetchAssoc = mysqli_fetch_assoc($get_tmp_query);

        $templete_name = $get_tmp_fetchAssoc['temp_name'].'.php';
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
                require("../Templetes/digital/$templete_name");
            }else{
            ?>
                <p style="color:red;">Templete Limit Expired</p>
                <a href="../templete-page/re-payment/re.payment.php?link=<?php echo $preview_templete_uid; ?>" class="btn btn-info">Re-payment</a>
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