<?php
include "../../conn.inc.php";
include "../../url.inc.php";
include "../../check login.inc.php";
editor_login();


if($conn){
    if(isset($_POST['addTmp_btn'])){
        if(  
            isset($_POST['temp_name']) && !empty($_POST['temp_name']) &&
            isset($_POST['userInputFill']) && !empty($_POST['userInputFill']) &&
            isset($_POST['templete_php_code']) && !empty($_POST['templete_php_code'])
        ){
            // htmlspecialchar
            $temp_content_php = $_POST['templete_php_code'];
            $temp_name = htmlspecialchars($_POST['temp_name']);
            
            // checkbox value store as a array using serialize
            $userInputFill = $_POST['userInputFill'];
            $userInputFill_Serialize = serialize($userInputFill);

            // img upload
            $fileName = $_FILES['temp_image']['name'];
            $fileTmp_location = $_FILES['temp_image']['tmp_name'];
            $fileMOve_folder_directory = "../../Templetes/templete imgs/".$fileName;

            // only jpg jpeg png file can upload
            $file_Extention = pathinfo($fileName, PATHINFO_EXTENSION);
            if( ($file_Extention=="jpg") || ($file_Extention=="jpeg") || ($file_Extention=="png") ){
                if ( move_uploaded_file($fileTmp_location,$fileMOve_folder_directory) ){
                    $sql = "INSERT INTO templetes (temp_name,temp_inputs,temp_img)
                        VALUES ('$temp_name','$userInputFill_Serialize','$fileName')";
                    $add_tmp_query = mysqli_query($conn,$sql);
                    if($add_tmp_query){
                        // create templete
                        $myfile = fopen("../../Templetes/digital/$temp_name.php", "w");
                        fwrite($myfile, $temp_content_php);
                        fclose($myfile);
                        header("Refresh:0; url=$add_templete_index_redirect");
                    }
                }
            }
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add templete</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/add templete.css">
</head>
<body>
    <section id="body_section_main">
        <div class="addingTemp_diiv_text">
            <p><b>Add New Templete Info</b></p>
        </div>
        <!-- add templete form -->
        <div class="inner_section_form">
            <form action="" method="post" enctype="multipart/form-data">
                    <!-- templete content php -->
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Enter Templete php code</label>
                        <textarea name="templete_php_code" class="form-control" id="" cols="30" rows="10" required></textarea>
                        
                    </div>
                    <!-- Templete Name -->
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Templete Name</label>
                        <input name="temp_name" type="text" class="form-control" id="exampleInputPassword1" required>
                    </div>
                    <!-- templete img -->
                    <div class="mb-3">
                        <label for="exampleInputPassword3" class="form-label">Templete Image</label>
                        <input name="temp_image" type="file" class="form-control" id="exampleInputPassword13" required>
                    </div>
                    <!-- templete input fileds -->
                    <div class="mb-3">
                        <label class="form-label">Select User Input Fill</label>
                        <!--  -->
                        <!--  -->
                        <!-- user_color -->
                        <div class="form-check">
                            <input name="userInputFill[]" class="form-check-input" type="checkbox" value="user_color_all_field" id="user_color">
                            <label class="form-check-label" for="user_color">One color all field</label>
                        </div>
                        <!-- user_logo -->
                        <div class="form-check">
                            <input name="userInputFill[]" class="form-check-input" type="checkbox" value="Company_Logo" id="user_logo">
                            <label class="form-check-label" for="user_logo">User logo</label>
                        </div>
                        <!-- user img -->
                        <div class="form-check">
                            <input name="userInputFill[]" class="form-check-input" type="checkbox" value="userImg" id="userImg">
                            <label class="form-check-label" for="userImg">User img</label>
                        </div>
                        <!-- user name -->
                        <div class="form-check">
                            <input name="userInputFill[]" class="form-check-input" type="checkbox" value="userName" id="userName" >
                            <label class="form-check-label" for="userName">User Name</label>
                        </div>
                        <!-- user short title -->
                        <div class="form-check">
                            <input name="userInputFill[]" class="form-check-input" type="checkbox" value="shortTitle" id="shortTitle" >
                            <label class="form-check-label" for="shortTitle"> Short Title</label>
                        </div>
                        <!-- user department -->
                        <div class="form-check">
                            <input name="userInputFill[]" class="form-check-input" type="checkbox" value="department" id="department" >
                            <label class="form-check-label" for="department"> Department</label>
                        </div>
                        <!-- user short desc -->
                        <div class="form-check">
                            <input name="userInputFill[]" class="form-check-input" type="checkbox" value="user_short_des" id="Description" >
                            <label class="form-check-label" for="Description"> Short Description</label>
                        </div>
                        <!-- location address -->
                        <div class="form-check">
                            <input name="userInputFill[]" class="form-check-input" type="checkbox" value="location" id="location" >
                            <label class="form-check-label" for="location">Location Address</label>
                        </div>
                        <!-- mobile number -->
                        <div class="form-check">
                            <input name="userInputFill[]" class="form-check-input" type="checkbox" value="mobileNumber" id="mobileNumber" >
                            <label class="form-check-label" for="mobileNumber">Mobile Number</label>
                        </div>
                        <!-- 2nd mobile number -->
                        <div class="form-check">
                            <input name="userInputFill[]" class="form-check-input" type="checkbox" value="user_2nd_number" id="mobileNumber2" >
                            <label class="form-check-label" for="mobileNumber2">2nd mobile Number</label>
                        </div>
                        <!-- email -->
                        <div class="form-check">
                            <input name="userInputFill[]" class="form-check-input" type="checkbox" value="email" id="email" >
                            <label class="form-check-label" for="email">E-mail</label>
                        </div>
                        <!-- website link -->
                        <div class="form-check">
                            <input name="userInputFill[]" class="form-check-input" type="checkbox" value="websiteLink" id="websiteLink" >
                            <label class="form-check-label" for="websiteLink">Website Link</label>
                        </div>
                        <!-- instagram link -->
                        <div class="form-check">
                            <input name="userInputFill[]" class="form-check-input" type="checkbox" value="InstagramLink" id="InstagramLink" >
                            <label class="form-check-label" for="InstagramLink">Instagram Link</label>
                        </div>
                        <!-- facebook link -->
                        <div class="form-check">
                            <input name="userInputFill[]" class="form-check-input" type="checkbox" value="FacebookLink" id="FacebookLink" >
                            <label class="form-check-label" for="FacebookLink">Facebook Link</label>
                        </div>
                        <!-- facebook link -->
                        <div class="form-check">
                            <input name="userInputFill[]" class="form-check-input" type="checkbox" value="user_twiter_link" id="user_twiter_link" >
                            <label class="form-check-label" for="user_twiter_link">Twiter Link</label>
                        </div>
                        
                        <!-- inline social icon -->
                        <div class="form-check">
                            <input name="userInputFill[]" class="form-check-input" type="checkbox" value="socialIcon" id="socialIcon" >
                            <label class="form-check-label" for="socialIcon">Inline social Icons</label>
                        </div>
                        <!-- buttom button -->
                        <div class="form-check">
                            <input name="userInputFill[]" class="form-check-input" type="checkbox" value="bottomButton" id="bottomButton" >
                            <label class="form-check-label" for="bottomButton">Bottom Button</label>
                        </div>
                    
                    <!--  -->

                    
                    </div>


                    <!--  -->
                    <div class="add_templete_btn_div ">
                        <button name="addTmp_btn" type="submit" class="btn btn-primary success">Add Templete </button>
                    </div>
                </form>
        </div>

    </section>
    
</body>
</html>




