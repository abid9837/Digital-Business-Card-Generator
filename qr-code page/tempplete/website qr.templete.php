<?php
if( isset($_GET['qr_link']) && !empty($_GET['qr_link']) ){
    $qr_link_variable = base64_decode ($_GET['qr_link']);

    // link_number genarate
    $sql = "SELECT * FROM `create_qr_code` WHERE link_number='$qr_link_variable' ";
    $query = mysqli_query($conn,$sql);
    $numRows = mysqli_num_rows($query);
    $fetchAssoc = mysqli_fetch_assoc($query);

    if( $query ){
      $user_website_url_redirect = $fetchAssoc['Website_URL'];
      header("Refresh:0; url=$user_website_url_redirect");

    }

    
}
?>



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="./css/website qr.templete.css">
</head>
<body>
    



</body>
</html> -->