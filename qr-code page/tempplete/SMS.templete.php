

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="./css/SMS.templete.css">
    <style>
        




#sms_sec{
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
#sms_sec img{
    width: 80%;
    border-radius: 10px;
}








    </style>
</head>
<body>
    <section id="sms_sec">
        <a href="sms:<?php echo $Whatsapp_number; ?>?body=<?php echo $message_txt; ?>">
            <img src="../imges/sms sent logo.jpg" alt="">
        </a>
        <?php
            header("Refresh:0; url=sms:$Whatsapp_number?body=$message_txt");
        ?>
    </section>
</body>
</html>