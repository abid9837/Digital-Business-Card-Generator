<?php
include "../conn.inc.php";
include "../url.inc.php";
include "../check login.inc.php";
if(isset($_SESSION['link_number'])){
    
}else{
    header("Refresh:0; url=$go_to_templete_page");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/payment.css">
    <link rel="stylesheet" href="./css/media.payment.css">
    <style>

    </style>
</head>
<body>
    <section id="section_body_main">
        <div class="Inner_section">
            <img id="qr_dekstop" height="400px" src="./paymentQR code.jpg" alt="">
            <img id="qr_mobile" height="400px" src="./2nd qr bka.jpg" alt="">
            <div class="Right_content_payment_box">
                <h3>Or dial *247# and make payment on this number</h3>
                <p>select your package and make payment</p>
                <p>After complete payment, please fill this infomation. </p>
                <br>
                <div class="form_input_div">
                    <form action="./payment.info.up.php" method="post">
                        <div class="mb-3">
                            <input name="payment_number" type="number" class="form-control" placeholder="Enter your payment phone number" required>
                        </div>
                        <div class="mb-3">
                            <input name="payment_code" type="text" class="form-control" placeholder="Enter your transaction id" required>
                        </div>
                        <select name="card_time_limit" class="form-select" aria-label="Default select example" >
                            <option selected value="30">1 month ( 10 taka )</option>
                            <option value="365">1 year ( 100taka ) </option>
                        </select>
                        
                        <br>
                        <button style="background-color: #13D79C;" type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <style>
            body{
            background-color: rgb(222, 222, 222);
        }
        #section_body_main .Inner_section{
            background-color: #4485EF;
            color: white;
        }
</style>
</body>
</html>