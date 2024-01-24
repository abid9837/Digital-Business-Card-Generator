<?php
include "../../conn.inc.php";
include "../../url.inc.php";
include "../../check login.inc.php";
// user_login_for_templetes_page();

if(isset($_GET['qr_link'])){
    $qr_link = $_GET['qr_link'];
}

if($conn){
    if(
        isset($_POST['payment_code']) && $_POST['payment_number']
    ){
    
        // up payment info in db in  
    $payment_code = $_POST['payment_code'];
    $payment_number = $_POST['payment_number'];
    $card_time_limit = $_POST['card_time_limit'];

    // dates
    $payment_date =  date("Y-m-d"); // current date
    $futureDate = strtotime('+0' . $card_time_limit . ' days', strtotime($payment_date)); // Add 30 days to today's date
    $expire_date = date('Y-m-d', $futureDate); // Format the future date as YYYY-MM-DD


    
    $sql = "UPDATE create_qr_code SET payment_date='$payment_date',payment_expire_date='$expire_date', payment_code='$payment_code', payment_number='$payment_number', payment_status='on-hold' WHERE link_number='$qr_link'";
    $query = mysqli_query($conn,$sql);
    if($query){
        $_SESSION['paymen_status_now'] = "on-hold";
        header("Refresh:0; url='../../templete-page/payment.complete.php'");
    }
    

    }
    
    

}


?>