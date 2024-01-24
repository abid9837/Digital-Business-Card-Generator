<?php
include "url.inc.php";

session_start();

// admin login session function
function admin_login(){
    include "url.inc.php";
    if(
        isset($_SESSION['admin_email']) && 
        isset($_SESSION['admin_password'])
    ){  }else{
        header("Refresh:0; url=$login_session_faield_redirect");
    }
}
// editor login session function
function editor_login(){
    include "url.inc.php";
    if(
        isset($_SESSION['editor_email']) && 
        isset($_SESSION['editor_password'])
    ){  }else{
        header("Refresh:0; url=$login_session_faield_redirect");
    }
}
// user login session function
function user_login_for_templetes_page(){
    include "url.inc.php";
    if(
        isset($_SESSION['user_email']) && 
        isset($_SESSION['user_password'])
    ){  }else{
        header("Refresh:0; url=$form_templete_to_user_login");
    }
}
// user login session function
function user_login_check_normal_login(){
    include "url.inc.php";
    if(
        isset($_SESSION['user_email']) && 
        isset($_SESSION['user_password'])
    ){  }else{
        header("Refresh:0; url=$my_account_page_login_check_to_redirect_login_page");
    }
}
// in account index page page if user login  go to the my account page

function user_loged_in(){
    include "url.inc.php";
    if(
        isset($_SESSION['user_email']) && 
        isset($_SESSION['user_password'])
    ){ header("Refresh:0; url=$my_account_page");
    }else{
        
    }
}






?>