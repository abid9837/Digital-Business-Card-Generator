<?php
include "../url.inc.php";
session_start();
session_destroy();

header("Refresh:0; url=$my_account_page_login_check_to_redirect_login_page");





?>