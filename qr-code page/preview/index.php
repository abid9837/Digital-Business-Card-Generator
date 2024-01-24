<?php
include "../../conn.inc.php";

$qr_link_variable = $_GET['qr_link'];
include "../variables/qr variable .inc.php";


if(isset($_GET['qr_link'])){
    $qr_link = $_GET['qr_link'];
    $sql = "SELECT * FROM `create_qr_code` WHERE link_number='$qr_link' ";
    $query = mysqli_query($conn,$sql);
    $num_rows = mysqli_num_rows($query);
    $fetch_assoc = mysqli_fetch_assoc($query);
    $templete_name = $fetch_assoc['templete_name'];

    // variables
}
$imgpath = "";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./preview.css">
</head>
<body>
    <section id="preview_section">
            <?php require("../tempplete/$templete_name"); ?>
            <a href="../payment/make payment.php?qr_link=<?php echo $qr_link; ?>" style="margin-top: 20px;" class="btn btn-primary"> Order Now </a>
    </section>
</body>
</html>