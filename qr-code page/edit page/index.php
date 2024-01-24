<?php
include "../../conn.inc.php";
include "../../url.inc.php";
include "../../check login.inc.php";
user_login_check_normal_login();

$Social_Media = '';
$Website_or = '';
$landing_page_qr = '';
$PDF_qr = '';
$FB_PAGE ='';
$Phone_Call = '';
$Image_qr = '';
$SMS_qr = '';
// social media
if (isset($_GET['tmp'])){
    if($_GET['tmp'] == 'Social_Media'){
        $Social_Media = 'ok';
    }
}

// website
if (isset($_GET['tmp'])){
    if($_GET['tmp'] == 'Website_qr'){
        $Website_or = 'ok';
    }
}
// landing_page_qr
if (isset($_GET['tmp'])){
    if($_GET['tmp'] == 'landing_page_qr'){
        $landing_page_qr = 'ok';
    }
}

// PDF_qr
if (isset($_GET['tmp'])){
    if($_GET['tmp'] == 'PDF_qr'){
        $PDF_qr = 'ok';
    }
}
// FB_PAGE
if (isset($_GET['tmp'])){
    if($_GET['tmp'] == 'FB_PAGE'){
        $FB_PAGE = 'ok';
    }
}

// Phone_Call
if (isset($_GET['tmp'])){
    if($_GET['tmp'] == 'Phone_Call'){
        $Phone_Call = 'ok';
    }
}
// Image_qr
if (isset($_GET['tmp'])){
    if($_GET['tmp'] == 'Image_qr'){
        $Image_qr = 'ok';
    }
}

// SMS_qr
if (isset($_GET['tmp'])){
    if($_GET['tmp'] == 'SMS_qr'){
        $SMS_qr = 'ok';
    }
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit QR templete</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/edit page index.css">
</head>
<body>
    <?php include "../../custom header.php"; ?>
    <section id="section_eidt_tmp_body_main">

        <!-- social media start -->
        <?php if( $Social_Media == 'ok'){ ?>
            <div class="edit_page_div_main">
                <!--  -->
                <form action="./query/social media upload data.php" method="post" enctype="multipart/form-data">
                    <h5>Header :</h5>
                    <!-- logo -->
                    <div class="mb-3">
                        <label for="Upload_your_logo" class="form-label">Upload your logo</label>
                        <input name="Upload_your_logo" type="file" class="form-control" id="Upload_your_logo" aria-describedby="emailHelp">
                    </div>
                    <!-- title -->
                    <div class="mb-3">
                        <label for="Title" class="form-label">Title*</label>
                        <input name="Title" type="text" class="form-control" id="Title">
                    </div>
                    <!-- title color -->
                    <div class="mb-3">
                        <label for="Title_color" class="form-label">Title color </label>
                        <div style="display: flex; justify-content:center; align-items: center;">
                            <input name="Title_color" type="color" class="form-control" id="Title_color" style="width: 20%">
                            <input name="Title_color_OCDES" type="text" class="form-control" placeholder="or, paste your color code here" style="width: 90%">
                        </div>
                    </div>
                    <h5>Body :</h5>
                    <!-- body img -->
                    <div class="mb-3">
                        <label for="body_img" class="form-label">Image </label>
                        <input name="body_img" type="file" class="form-control" id="body_img">
                    </div>
                    <!-- Message -->
                    <div class="mb-3">
                        <label for="Message" class="form-label">Message </label>
                        <input name="Message" type="text" class="form-control" id="Message">
                    </div>
                    <!-- Subtext -->
                    <div class="mb-3">
                        <label for="Subtext" class="form-label">Subtext </label>
                        <input name="Subtext" type="text" class="form-control" id="Subtext">
                    </div>
                    <h5>Links</h5>
                    <h6>At least one field is mandatory *</h6>

                    <div class="input_padding_">
                        <!-- Facebook_username -->
                        <div class="mb-3">
                            <label for="Facebook_username" class="form-label">Facebook username </label>
                            <input name="Facebook_username" type="text" class="form-control" id="Facebook_username" placeholder="https://www.example.com">
                        </div>
                        <!-- Instagram_username -->
                        <div class="mb-3">
                            <label for="Instagram_username" class="form-label">Instagram username </label>
                            <input name="Instagram_username" type="text" class="form-control" id="Instagram_username" placeholder="https://www.example.com">
                        </div>
                        <!-- Twitter_Username -->
                        <div class="mb-3">
                            <label for="Twitter_Username" class="form-label">Twitter Username </label>
                            <input name="Twitter_Username" type="text" class="form-control" id="Twitter_Username" placeholder="https://www.example.com">
                        </div>
                        <!-- Pinterest Username -->
                        <div class="mb-3">
                            <label for="Pinterest_Username" class="form-label">Pinterest Username </label>
                            <input name="Pinterest_Username" type="text" class="form-control" id="Pinterest_Username" placeholder="https://www.example.com">
                        </div>
                        <!-- Linkedin_Username -->
                        <div class="mb-3">
                            <label for="Linkedin_Username" class="form-label">Linkedin Username </label>
                            <input name="Linkedin_Username" type="text" class="form-control" id="Linkedin_Username" placeholder="https://www.example.com">
                        </div>
                        <!-- Whatsapp number +88 -->
                        <div class="mb-3">
                            <label for="whatsapp" class="form-label">Whatsapp (must use country code +88) </label>
                            <input name="whatsapp" type="text" class="form-control" id="whatsapp" placeholder="+88 018.......">
                        </div>
                        <!-- Youtube_channel -->
                        <div class="mb-3">
                            <label for="Youtube_channel" class="form-label">Youtube channel </label>
                            <input name="Youtube_channel" type="text" class="form-control" id="Youtube_channel" placeholder="https://www.example.com">
                        </div>
                        <!-- Snapchat_channel -->
                        <div class="mb-3">
                            <label for="Snapchat_channel" class="form-label">Snapchat channel </label>
                            <input name="Snapchat_channel" type="text" class="form-control" id="Snapchat_channel" placeholder="https://www.example.com">
                        </div>
                        <!-- Tiktok channel -->
                        <div class="mb-3">
                            <label for="Tiktok_channel" class="form-label">Tiktok channel </label>
                            <input name="Tiktok_channel" type="text" class="form-control" id="Tiktok_channel" placeholder="https://www.example.com">
                        </div>
                        <!-- Website URL -->
                        <div class="mb-3">
                            <label for="Website_URL" class="form-label">Website URL </label>
                            <input name="Website_URL" type="text" class="form-control" id="Website_URL" placeholder="https://www.example.com">
                        </div>
                    </div>

                    
                    <!--  -->
                    <button type="submit" class="btn btn-primary">Create QR code</button>
                </form>
                <!--  -->
            </div>
        <?php } ?>
        <!-- end -->

        <!-- Website_or start condition -->
        <?php if($Website_or =='ok'){ ?>
            <div class="edit_page_div_main">
                <form action="./query/website qr.templete.upload.data.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Enter Your Website Link</label>
                        <input name="Website_URL" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="https://www.example.com" required> 
                        
                    </div>

                    <button type="submit" class="btn btn-primary">Make QR</button>
                </form>
            </div>
        <?php } ?>
        <!-- end  -->

        <!-- landing_page_qr start condition -->
        <?php if($landing_page_qr =='ok'){ ?>
            <div class="edit_page_div_main">
                <form action="./query/landing.page.templete DATA.update.php" method="post" enctype="multipart/form-data">
                    <!-- body img -->
                    <div class="mb-3">
                        <label for="body_img" class="form-label"> Your photo </label>
                        <input name="body_img" type="file" class="form-control" id="body_img">
                    </div>
                    <!-- title -->
                    <div class="mb-3">
                        <label for="Title" class="form-label">Title*</label>
                        <input name="Title" type="text" class="form-control" id="Title">
                    </div>
                    <!-- Subtext -->
                    <div class="mb-3">
                        <label for="Subtext" class="form-label">Sub title </label>
                        <input name="Subtext" type="text" class="form-control" id="Subtext">
                    </div>
                    <!-- buttons -->
                    <style>
                        .button_div_main{
                            display: flex;
                            gap: 30px;
                        }
                        .button_div_main div{
                            display: flex;
                            flex-direction: column;
                            justify-content: center;
                            align-items: start;
                            gap: 10px
                        }
                    </style>
                    <div class="mb-3 button_div_main">
                        <div>
                            <label for="">Button 1</label>
                            <input name="btn1_name" type="text" class="form-control" placeholder="button 1 name" >
                            <input name="btn1_url" type="text" class="form-control" placeholder="https://www.example.com" >
                        </div>
                        <div>
                            <label for=""> Button 2</label>
                            <input name="btn2_name" type="text" class="form-control" placeholder="button 2 name" >
                            <input name="btn2_url" type="text" class="form-control" placeholder="https://www.example.com" >
                        </div>
                    </div>
                    


                    <!-- Message -->
                    <div class="mb-3">
                        <label for="Message" class="form-label">Message </label>
                        <input name="Message" type="text" class="form-control" id="Message">
                    </div>
                    <!-- theme color -->
                    <div class="mb-3" >
                        <label for="theme_color" class="form-label">Theme color </label>
                        <div style="display: flex; justify-content:center; align-items: center;">
                            <input name="theme_color" type="color" class="form-control" id="theme_color" style="width: 20%">
                            <input name="theme_color_OCDES" type="text" class="form-control" placeholder="or, paste your color code here" style="width: 90%">
                        </div>
                    </div>
                    <!-- font color -->
                    <div class="mb-3">
                        <label for="Title_color" class="form-label">Text color </label>
                        <div style="display: flex; justify-content:center; align-items: center;">
                            <input name="font_color" type="color" class="form-control" id="Title_color" style="width: 20%">
                            <input name="font_color_OCDES" type="text" class="form-control" placeholder="or, paste your color code here" style="width: 90%">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Make QR</button>
                </form>
            </div>
        <?php } ?>
        <!-- end  -->

        <!-- PDF FILE start condition -->
        <?php if($PDF_qr =='ok'){ ?>
            <div class="edit_page_div_main">
                <form action="./query/PDF.templete UPLOAD.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Choose your pdf file</label>
                        <input name="PDF_QR" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required> 
                        
                    </div>

                    <button type="submit" class="btn btn-primary">Make QR</button>
                </form>
            </div>
        <?php } ?>
        <!-- end -->

        <!-- FB_PAGE start condition -->
        <?php if($FB_PAGE =='ok'){ ?>
            <div class="edit_page_div_main">
                <!--  -->
                <form action="./query/facebook page.templete.UPDATE data.php" method="post" enctype="multipart/form-data">
                    <!-- logo -->
                    <div class="mb-3">
                        <label for="Upload_your_logo" class="form-label">Upload your logo</label>
                        <input name="fb_page_Upload_your_logo" type="file" class="form-control" id="Upload_your_logo" aria-describedby="emailHelp">
                    </div>
                    <!-- title -->
                    <div class="mb-3">
                        <label for="Title" class="form-label">Title*</label>
                        <input name="fb_page_Title" type="text" class="form-control" id="Title" placeholder="This is fb page title">
                    </div>
                    <!-- url fb page -->
                    <div class="mb-3">
                        <label for="fb_page_url" class="form-label">Paste your fb page link</label>
                        <input name="fb_page_url" type="text" class="form-control" id="fb_page_url" placeholder="https://www.facebook.com/im.abid1234/">
                    </div>
                    <!-- follower -->
                    <div class="mb-3">
                        <label for="fb_page_follower" class="form-label">How many follower you have ?</label>
                        <input name="fb_page_follower" type="text" class="form-control" id="fb_page_follower" placeholder="20k..">
                    </div>
                    <!-- body img -->
                    <div class="mb-3">
                        <label for="body_img" class="form-label">Image </label>
                        <input name="fb_page_body_img" type="file" class="form-control" id="body_img">
                    </div>

                    <button type="submit" class="btn btn-primary">Create QR code</button>
                </form>
                <!--  -->
            </div>
        <?php } ?>

        <!-- Phone_Call start condition -->
        <?php if($Phone_Call =='ok'){ ?>
            <div class="edit_page_div_main">
                <form action="./query/Phone_Call.templete.UPLOAD .php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Enter your mobile number with country code</label>
                        <input name="Mobile_number_qr" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="+88 01840249837" required> 
                        
                    </div>

                    <button type="submit" class="btn btn-primary">Make QR</button>
                </form>
            </div>
        <?php } ?>

        <!-- Image_qr start condition -->
        <?php if($Image_qr =='ok'){ ?>
            <div class="edit_page_div_main">
                <form action="./query/Image.templete.UPLOAD Img QR.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Choose your photo</label>
                        <input name="Image_qr" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required> 
                        
                    </div>

                    <button type="submit" class="btn btn-primary">Make QR</button>
                </form>
            </div>
        <?php } ?>

        <!-- SMS_qr start condition -->
        <?php if($SMS_qr =='ok'){ ?>
            <div class="edit_page_div_main">
                <form action="./query/SMS.templete.upload.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Enter your mobile number</label>
                        <input name="SMS_qr_number" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="+88 01840249837" required> 
                    </div>
                    <div class="mb-3">
                        <label for="SMS_qr_Message" class="form-label">Message </label>
                        <input name="SMS_qr_Message" type="text" class="form-control" id="SMS_qr_Message">
                    </div>

                    <button type="submit" class="btn btn-primary">Make QR</button>
                </form>
            </div>
        <?php } ?>


    </section>
</body>
</html>