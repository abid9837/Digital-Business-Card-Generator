<?php
include "../conn.inc.php";
include "../url.inc.php";
include "../check login.inc.php";
user_login_for_templetes_page();

if($conn){
    // show templetes
    $show_tmp_sql = "SELECT * FROM `templetes`";
    $show_tmp_query = mysqli_query($conn,$show_tmp_sql);
    $show_tmp_numRows = mysqli_num_rows($show_tmp_query);
    

}

// php syntex and query





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>template page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/index.templete page.css">
    <link rel="stylesheet" href="./css/media.index.templete page.css">
</head>
<body>
    <section id="body_section_main">
        <h1>Choose your Templete</h1>
        <div id="templete_div">
            <?php while($show_tmp_fetch_assoc = mysqli_fetch_assoc($show_tmp_query)){ ?>
                <a href="./edit templete.php?tmp=<?php echo $show_tmp_fetch_assoc['id']; ?>">
                    <img src="../Templetes/templete imgs/<?php echo $show_tmp_fetch_assoc['temp_img']; ?>" alt="">
                    <p>price : 10 taka</p>
                </a>
            <?php } ?>

            <a href="./edit templete.php?tmp=<?php echo $show_tmp_fetch_assoc['id']; ?>">
                    <img src="../Templetes/templete imgs/<?php echo $show_tmp_fetch_assoc['temp_img']; ?>" alt="">
                    <p>price : 10 taka</p>
                </a>
            

        </div>
    </section>

                
    
</body>
</html>