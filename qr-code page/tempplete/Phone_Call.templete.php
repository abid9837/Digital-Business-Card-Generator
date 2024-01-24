<?php
if( isset($_GET['qr_link']) && !empty($_GET['qr_link']) ){
    $qr_link_variable = base64_decode ($_GET['qr_link']);

    // link_number genarate
    $sql = "SELECT * FROM `create_qr_code` WHERE link_number='$qr_link_variable' ";
    $query = mysqli_query($conn,$sql);
    $numRows = mysqli_num_rows($query);
    $fetchAssoc = mysqli_fetch_assoc($query);

    if( $query ){
      $Whatsapp_number = $fetchAssoc['Whatsapp_number'];
      

    }

    
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Call</title>
    <link rel="stylesheet" href="./css/Phone_Call.templete.css">
    <style>
        
.container{
    width: 300px;
    height: auto;
    background-color: rgb(252, 252, 252);
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.282);
    padding: 40px 10px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
.container img{
    width: 70%;
}
.phone_number{
    font-size: 30px;
    margin: 0;
    padding: 0;
    margin-bottom: 20px;
    font-weight: bold;
}
.container a{
    text-decoration: none;
    font-size: 17px;
    padding: 10px 25px;
    background-color: #29ABE2;
    border-radius: 100px;
    margin-top: 20px;
    box-shadow: 2px 2px 10px  #08719e88;
    transition: .5s;
    color: white;
    font-weight: 500;
}
.container a:hover{
    box-shadow: 2px 2px 10px  #08719e;
    transform: scale(1.05);
    color: rgb(14, 14, 14);
}











    </style>
</head>
<body>
    <div class="container">
        <p class="phone_number"><?php echo $Whatsapp_number; ?></p>
        <img src="./img/phone-keypad.png" alt="">
        <a href="tel:01840249837">Call Now</a>
    </div>
</body>
</html>
