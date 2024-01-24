<?php
include "../conn.inc.php";
include "../url.inc.php";
include "../check login.inc.php";
user_login_for_templetes_page();
if(isset($_SESSION['link_number'])){
    $link_number = $_SESSION['link_number'];
}else{
    header("Refresh:0; url=$go_to_templete_page");
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


    
    $sql = "UPDATE create_cards SET payment_date='$payment_date',payment_expire_date='$expire_date', payment_code='$payment_code', payment_number='$payment_number', payment_status='on-hold' WHERE link_number='$link_number'";
    $query = mysqli_query($conn,$sql);
    if($query){
        unset($_SESSION['link_number']);
        $_SESSION['paymen_status_now'] = "on-hold";
        header("Refresh:0; url=$payment_complete_php_file");
    }
    

    }
    
    

}


?>