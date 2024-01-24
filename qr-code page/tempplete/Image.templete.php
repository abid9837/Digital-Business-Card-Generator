<?php



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body{
            background-color: black;
        }
        #main_sec{
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #main_sec img{
            height: 90vh;
            width: auto;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.532);
        }
        @media only screen and (max-width: 800px) {
            #main_sec img{
                height: auto;
                width: 90vw;
            }
        }

    </style>
</head>
<body>
    <section id="main_sec">
        <img src="../<?php echo $imgpath; ?>imges/body img/<?php echo $body_img; ?>" alt="">
    </section>
</body>
</html>