<?php
include "conn.inc.php";
include "url.inc.php";
include "check login.inc.php";
admin_login();

// if user not payment in one days then data delete auto
function paymetn_not_veryfies_data_delete(){
    include "./conn.inc.php";
    $currentDate = (date("Y-m-d"));
    // 
    $card_sql_loop = "SELECT * FROM `create_cards` WHERE payment_status='pending' ";
    $card_query_loop = mysqli_query($conn,$card_sql_loop);
    $card_numRows_loop = mysqli_num_rows($card_query_loop);
    // 
    while( $card_fetchAssoc_loop = mysqli_fetch_assoc($card_query_loop) ){
        $card_sql_Delete = "DELETE FROM create_cards WHERE payment_status = 'pending' AND created_date < '$currentDate'";
        $card_query_Delete = mysqli_query($conn,$card_sql_Delete);
    }
}
paymetn_not_veryfies_data_delete();

//  if user card is over 30 days
function Payment_date_over_30_days(){
    include "./conn.inc.php";

    $card2_sql_loop = "SELECT * FROM `create_cards` WHERE payment_status='active' ";
    $card2_query_loop = mysqli_query($conn,$card2_sql_loop);
    $card2_numRows_loop = mysqli_num_rows($card2_query_loop);
    // 
    while( $card2_fetchAssoc_loop = mysqli_fetch_assoc($card2_query_loop) ){
        $currentDate2 = (date("Y-m-d"));
        $payment_date2 = $card2_fetchAssoc_loop['payment_date'];
        $expire_date2 = $card2_fetchAssoc_loop['payment_expire_date'];
        // 
        $card_sql_update2 = "UPDATE create_cards SET payment_status='on-hold'  WHERE payment_status = 'active' AND payment_expire_date < '$currentDate2'";
        $card_query_update2 = mysqli_query($conn,$card_sql_update2);
    }
}
Payment_date_over_30_days();

// QR CODE ----------------
// if user not payment in one days then data delete auto
function QR_CODE_paymetn_not_veryfies_data_delete(){
    include "./conn.inc.php";
    $currentDate = (date("Y-m-d"));
    // 
    $QR_card_sql_loop = "SELECT * FROM `create_qr_code` WHERE payment_status='pending' ";
    $QR_card_query_loop = mysqli_query($conn,$QR_card_sql_loop);
    $QR_card_numRows_loop = mysqli_num_rows($QR_card_query_loop);
    // 
    while( $QR_card_fetchAssoc_loop = mysqli_fetch_assoc($QR_card_query_loop) ){
        $QR_card_sql_Delete = "DELETE FROM create_qr_code WHERE payment_status = 'pending' AND created_date < '$currentDate'";
        $QR_card_query_Delete = mysqli_query($conn,$QR_card_sql_Delete);
    }
}

//  if user card is over 30 days
function QR_Payment_date_over_30_days(){
    include "./conn.inc.php";

    $QR_card_sql_loop = "SELECT * FROM `create_qr_code` WHERE payment_status='active' ";
    $QR_card_query_loop = mysqli_query($conn,$QR_card_sql_loop);
    $QR_card_numRows_loop = mysqli_num_rows($QR_card_query_loop);
    // 
    while( $QR_card_fetchAssoc_loop = mysqli_fetch_assoc($QR_card_query_loop) ){
        $QR_currentDate = (date("Y-m-d"));
        $QR_payment_date = $QR_card_fetchAssoc_loop['payment_date'];
        $QR_expire_date = $QR_card_fetchAssoc_loop['payment_expire_date'];
        // 
        $QR_card_sql_update = "UPDATE create_qr_code SET payment_status='on-hold'  WHERE payment_status = 'active' AND payment_expire_date < '$QR_currentDate'";
        $QR_card_query_update = mysqli_query($conn,$QR_card_sql_update);
    }
}





// qr
QR_CODE_paymetn_not_veryfies_data_delete();
QR_Payment_date_over_30_days();
 
// header("Refresh:0; url=$admin_panel_page");
?>