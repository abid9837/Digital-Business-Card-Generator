<?php
include "../conn.inc.php";
include "../check login.inc.php";
include "../url.inc.php";
admin_login();


$empty_search_input = "";
$serial_number = 0;
$show_table = "";

// search user info and approve order
if($conn){
    if( isset($_POST['search_user_info_btn']) ){
        if(
            ( isset($_POST['user_payment_phone']) && !empty($_POST['user_payment_phone']) ) ||
            ( isset($_POST['user_payment_trans']) && !empty($_POST['user_payment_trans']) ) 
        ){
            $show_table = "ok";
            $user_payment_phone = $_POST['user_payment_phone'];
            $user_payment_trans = $_POST['user_payment_trans'];

            // for loop
            $search_sql = "SELECT * FROM `create_qr_code` WHERE payment_number='$user_payment_phone' OR payment_code='$user_payment_trans'  ";
            $search_query = mysqli_query($conn,$search_sql);
            $search_numRows = mysqli_num_rows($search_query);

        }else{
            $empty_search_input = "please provide info!";
        }
        
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/admin panel.css">
    <style>
        a{
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
    <section id="body_section">

        <div style="display: flex; gap: 10px;">
            <a href="#" >
                <div style="padding: 10px 20px;  border-radius: 10px; display: flex; justify-content: center; align-items: center;">
                    <h6 style="padding: 0; margin: 0; color: white; ">QR Code</h6>
                </div>
            </a>
            <a href="./admin panel.php">
                <div style="padding: 10px 20px; background-color: #14E2A4; border-radius: 10px; display: flex; justify-content: center; align-items: center;">
                    <h6 style="padding: 0; margin: 0; ">Business Card</h6>
                </div>
            </a>
        </div>
        <!-- search for order transiction id -->
        <div class="search_div_main">
            <form action="" method="post">
                <!-- seach input -->
                <div class="mb-3">
                    <label for="">QR </label><br>
                    <label for="exampleInputEmail1" class="form-label">Enter user payment number</label>
                    <input name="user_payment_phone" type="text" class="form-control" id="exampleInputEmail1" placeholder="123....">
                </div>
                <!-- seach input -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Enter order transaction id</label>
                    <input name="user_payment_trans" type="text" class="form-control" id="exampleInputEmail1" placeholder="123....">
                </div>
                <!--  -->
                <p style="color:red;"><?php echo $empty_search_input; ?></p>
                <div class="search_btn_div">
                    <button name="search_user_info_btn" type="submit" class="btn btn-primary success">Search </button>
                    <a href="../cards.time dealy.php" class="btn btn-primary success"> Refresh database </a>
                </div>
            </form>
        </div>

        <!-- search result div -->
        <?php if($show_table=='ok'){ ?>
        
        <div class="search_result_div_main">

                        <table style="overflow-x: scroll;" class="table table-dark table-hover">
                            <tr>
                                <th>#</th>
                                <th>Action</th>
                                <th>Date</th>
                                <th>Payment Status</th>
                                <th>Trans id</th>
                                <th>Payment Number</th>
                                <th>Visibility</th>
                                <th>QR Code</th>
                                
                                
                                
                            </tr>
                            <?php



                            
                                while( $search_fetchAssoc = mysqli_fetch_assoc($search_query)){  
                                
                                $transUID = $search_fetchAssoc['payment_code'];
                                // check dates
                                $date1 = strtotime(date("Y-m-d"));
                                $date2 = strtotime($search_fetchAssoc['payment_expire_date']);
                                $difference = $date2 - $date1;
                                $expire_days = $difference / (60 * 60 * 24)." days";

                                // auto serial number
                                $serial_number += 1;

                                // get templete info
                                $templete_uid = $search_fetchAssoc['user_uid']; // get tmp uid by loop

                                $templete_sql = "SELECT * FROM `templetes` WHERE id='$templete_uid' ";
                                $templete_query = mysqli_query($conn,$templete_sql);
                                $templete_numRows = mysqli_num_rows($templete_query);
                                $templete_fetchAssoc = mysqli_fetch_assoc($templete_query)

                            ?>
                            <tr>
                                
                                <td><p><?php echo $serial_number; ?></p></td>
                                <td>
                                    <a href="./make.active.order QR.php?trans=<?php echo $transUID; ?>" class="btn btn-info">Active</a>
                                </td>
                                <td><p><?php echo $search_fetchAssoc['payment_date']; ?></p></td>
                                <td><p><?php echo $search_fetchAssoc['payment_status']; ?></p></td>
                                <td><p><?php echo $search_fetchAssoc['payment_code']; ?></p></td>
                                <td><p><?php echo $search_fetchAssoc['payment_number']; ?></p></td>
                                <td><p>
                                    <?php 
                                        if($expire_days<0){
                                            echo "undefined";
                                        }else{
                                            echo $expire_days; 
                                        }
                                    ?>
                                </p></td>
                                <td> 
                                    <?php
                                        if($search_fetchAssoc['payment_status']=='on-hold'){
                                            echo "Deactive";
                                        }
                                        if($search_fetchAssoc['payment_status']=='active'){
                                            echo "active";
                                        }
                                    ?>
                                </td>
                                
                                
                            </tr>
                            <?php }?>
                            
                        </table>
        </div>
        <?php } ?>

    </section>
    
</body>
</html>