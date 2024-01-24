<?php
include "../conn.inc.php";
include "../url.inc.php";
include "../check login.inc.php";
user_login_for_templetes_page();
if($conn){
    $tmp = $_GET['tmp'];
    // show templetes
    $show_tmp_sql = "SELECT * FROM `templetes` WHERE id='$tmp'";
    $show_tmp_query = mysqli_query($conn,$show_tmp_sql);
    $show_tmp_numRows = mysqli_num_rows($show_tmp_query);
    $show_tmp_fetch_assoc = mysqli_fetch_assoc($show_tmp_query);

    // templete inputs
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fill Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/edit.temp.css">
    <style>

        @media screen and (max-width: 440px) {
            #templete_left_div{
                width: 100%;
                height: 30vh;
                position: relative;
                margin-top: 10px;
                
            }
            #templete_left_div img{
                height: 100%;
            }
            #body_section_main{
                margin-bottom: 150px;
            }
        }
    </style>
</head>
<body>
    <div id="templete_left_div">
            <img src="../Templetes/templete imgs/<?php echo $show_tmp_fetch_assoc['temp_img']; ?>" alt="">
    </div>
    <sectionc id="body_section_main">

        <!-- form -->
        <div id="templete_form_inputs">
            <?php require('./templete inputs/templete.inputs.php') ?>
        </div>


    </section>
    
    


<style>
            body{
            background-color: rgb(222, 222, 222);
        }
</style>
</body>
</html>




