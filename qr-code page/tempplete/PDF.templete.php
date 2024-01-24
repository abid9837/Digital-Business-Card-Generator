<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php if($body_img!=''){ ?>
        <embed width="800px" height="2100px" src="../<?php echo $imgpath; ?>imges/body img/<?php echo $body_img; ?>" 
            type="application/pdf"
            frameBorder="0"
            scrolling="auto"
            height="600px"
            width="100%"
        >
    <?php } ?>

</body>
</html>