<?php
include "../conn.inc.php";
include "../url.inc.php";
include "../check login.inc.php";
user_login_check_normal_login();


if(isset($_SESSION['user_email']) && $_SESSION['user_password']){
    $user_email = $_SESSION['user_email'];
    $user_password = $_SESSION['user_password'];
    // user info 
    $log_sql = "SELECT * FROM `users_account` WHERE emails='$user_email' AND passwords='$user_password' ";
    $log_query = mysqli_query($conn,$log_sql);
    $log_numRows = mysqli_num_rows($log_query);
    $log_fetchAssoc = mysqli_fetch_assoc($log_query);
    

        // card info
        $user_uid = $log_fetchAssoc['id'];
        $card_sql = "SELECT * FROM `create_qr_code` WHERE user_uid='$user_uid' ";
        $card_query = mysqli_query($conn,$card_sql);
        $card_numRows = mysqli_num_rows($card_query);
        $card_fetchAssoc = mysqli_fetch_assoc($card_query);
        if($card_numRows>0){

            // active order 
            $active_sql = "SELECT * FROM `create_qr_code` WHERE user_uid='$user_uid' AND payment_status='active' ";
            $active_query = mysqli_query($conn,$active_sql);
            $active_numRows = mysqli_num_rows($active_query);
            // $active_fetchAssoc = mysqli_fetch_assoc($active_query);

            // pending order 
            $pending_sql = "SELECT * FROM `create_qr_code` WHERE user_uid='$user_uid' AND payment_status='on-hold' limit 1";
            $pending_query = mysqli_query($conn,$pending_sql);
            $pending_numRows = mysqli_num_rows($pending_query);
            // $active_fetchAssoc = mysqli_fetch_assoc($pending_query);


            // // dates

            // $date1 = strtotime(date("Y-m-d"));
            // $date2 = strtotime($card_fetchAssoc['payment_expire_date']);
            // $difference = $date2 - $date1;
            // $expire_days = $difference / (60 * 60 * 24)." days";
            
            // echo $expire_days;
            $serial_number = 0;





        }else{
            
        }


}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>My Account</title>
    <link rel="stylesheet" href="./css/my account.css">
    <link rel="stylesheet" href="./css/media.my account.css">
</head>
<body>
    <section id="body_sec_main">
        <div class="account_info_div_main">
            <div class="account_info_top_bar">
                <!--  -->
                <div class="user_img_div">
                    <img src="./user  imgs/<?php echo $log_fetchAssoc['imgs'] ?>" alt="img">
                    
                    <a href="./log.out.php" class="logout_div">Log out</a>
                </div>
                <h5><?php echo $log_fetchAssoc['full_name'] ?></h5>
            </div>
            <br>
                <a href="<?php echo $go_to_templete_page ?>" style="width:152px; margin-top: 10px;" class="btn btn-primary">Business card</a>
                <a href="<?php echo $qr_code_page_link ?>" style="width:152px; margin-top: 10px;" class="btn btn-primary">Make QR</a>
            <br>
            <?php if($card_numRows>0){ ?>
            <!-- order part -->
            <div id="total_order_div">
                <div class="order_div_top_bar">
                    <h5> total order : <b><?php echo $card_numRows; ?></b></h5>
                    <h5>Active : <b><?php echo $active_numRows; ?></b></h5>
                    <h5>Pending : <b><?php echo $pending_numRows; ?></b></h5>
                </div>


                <!-- order list -->
                <div class="order_list_div_main">
                    <h6>Order List : <b>QR Code</b> </h6>
                    <a href="./my account.php" style="width:152px; margin-top: 10px;" class="btn btn-primary">Business order</a>
                    <br>
                    <div class="table_div">
                        <table style="overflow-x: scroll;" class="table table-dark table-hover">
                            <tr>
                                <th>#</th>
                                
                                <th>Date</th>
                                <th>Payment Status</th>
                                <th>Trans id</th>
                                <th>Payment Number</th>
                                <th>Visibility</th>
                                <th>templetes</th>
                                <th>Qr codes</th>
                                
                                
                                
                            </tr>
                            <?php
                                // while loop 
                                $card_sql_loop = "SELECT * FROM `create_qr_code` WHERE user_uid='$user_uid' ";
                                $card_query_loop = mysqli_query($conn,$card_sql_loop);
                                $card_numRows_loop = mysqli_num_rows($card_query_loop);


                            
                                while( $card_fetchAssoc_loop = mysqli_fetch_assoc($card_query_loop)){  
                                // check dates
                                $date1 = strtotime(date("Y-m-d"));
                                $date2 = strtotime($card_fetchAssoc_loop['payment_expire_date']);
                                $difference = $date2 - $date1;
                                $expire_days = $difference / (60 * 60 * 24)." days";
                                $current_date = date("Y-m-d");
                                

                                // auto serial number
                                $serial_number += 1;

                                // get templete info
                                $templete_uid = $card_fetchAssoc_loop['user_uid']; // get tmp uid by loop

                                $templete_sql = "SELECT * FROM `templetes` WHERE id='$user_uid' ";
                                $templete_query = mysqli_query($conn,$templete_sql);
                                $templete_numRows = mysqli_num_rows($templete_query);
                                $templete_fetchAssoc = mysqli_fetch_assoc($templete_query)

                                // 


                            ?>
                            <tr>
                                
                                <td><p><?php echo $serial_number; ?></p></td>
                                
                                <td><p><?php echo $card_fetchAssoc_loop['created_date']; ?></p></td>
                                <td><p><?php echo $card_fetchAssoc_loop['payment_status']; ?></p></td>
                                <td><p><?php echo $card_fetchAssoc_loop['payment_code']; ?></p></td>
                                <td><p><?php echo $card_fetchAssoc_loop['payment_number']; ?></p></td>
                                <td><p>
                                    <?php
                                        if($expire_days<0){
                                            echo "undefined";
                                        }else{
                                            echo $expire_days; 
                                        }
                                        
                                     ?>
                                    </p>
                                </td>
                                <td> 
                                    <?php
                                        if($card_fetchAssoc_loop['payment_status']=='on-hold'){
                                            echo "Deactive";
                                        }
                                        if($card_fetchAssoc_loop['payment_status']=='active'){
                                            echo "active";
                                        }
                                    ?>
                                </td>


                                <td  style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100%;"> 
                                    <!-- QR code -->
                                    <?php
                                        if($card_fetchAssoc_loop['QR_src']=="" && $card_fetchAssoc_loop['payment_status']=='pending'){
                                    ?>
                                            <p style="color: red;">payment not veryfied</p> <br>
                                            <a href="../qr-code page/payment/re-payment/re.payment.php?qr_link=<?php echo $card_fetchAssoc_loop['link_number']; ?>" class="btn btn-info" style="margin-top: 10px;">Make Payment</a>
                                    <?php
                                        }else if($card_fetchAssoc_loop['payment_status']=='on-hold'){  
                                    ?>
                                            <p>You have one more step</p>
                                            <p>Message us on website</p>
                                            <p style="text-align: center;">provide us your payment number and trans id</p>
                                    <?php } ?>
                                    <?php if( $card_fetchAssoc_loop['payment_status']=='active' ){ ?>
                                        
                                            <img style="width: 100px;" src="<?php echo $card_fetchAssoc_loop['QR_src']; ?>" alt="" srcset="">
                                            <a  class="btn btn-info" style="margin-top: 10px;" href="./qr imgs/<?php echo $card_fetchAssoc_loop['QE_image_name'] ?>" download>Download</a>
                                            <a  class="btn btn-info" style="margin-top: 10px;" href="<?php echo $card_fetchAssoc_loop['QR_visit'] ?>" >Visit</a>
                                            
                                    <?php } ?>
                                </td>
                                
                                
                            </tr>
                            <?php }?>
                            
                        </table>
                    </div>
                    
                </div>
                <!-- if no data found -->
                <?php }else{ ?>
                    <p>You have no card</p> 
                    <a href="./my account.php" style="width:172px; margin-top: 10px;" class="btn btn-primary">Show business card</a>

                <?php } ?>
                

            </div>
    
        </div>
        


    </section>
</body>
</html>



