<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="custom header.css"> -->

    <style>
body{
    margin: 0;
    padding: 0;
    

}
p{
    padding: 0;
    margin: 0;
}
#header1{
    width: 100%;
    height: 50px;
text-decoration: none;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
}
#header1 .inner_sectiono{
    height: 100%;
}
#header1 .inner_sectiono_left{
    width: 20%;
    display: flex;
    justify-content: start;
    align-items: center;
    padding-left: 40px;
}
#header1 .inner_sectiono_left img{
    width: 100px;
}
/*  */
#header1 .inner_sectiono_right{
    width: 80%;
    padding-right: 40px;
    display: flex;
    justify-content: end;
    align-items: center;
}
#header1 .inner_sectiono_right ul{
    margin-top: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
}
#header1 .inner_sectiono_right ul li{
    list-style: none;
}
#header1 .inner_sectiono_right ul li a{
    text-decoration: none;
    color: black;
    padding: 10px 20px;

}
#header1 .inner_sectiono_right ul li a:hover{
    color: #FEDB03;

}
#drop_down_menu{
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 100px;
    cursor: pointer;
    background-color: transparent;
    padding: 5px 10px;
    background-color: #14E2A4;

}
.inner_menu_div_main{
    width: 200px;
    height: 100px;
    background-color: green;
    position: absolute;

    
}
.drop_menu_div{
    width: 240px;
    height: 240px;
    background-color: rgb(248, 248, 248);
    position: absolute;
    margin-top: 280px;
    margin-left: -160px;
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    padding: 20px;
    gap: 5px;
    display: none;

}
.drop_menu_div a{
    text-decoration: none;
    border-radius: 10px;
    padding: 5px;
    color: black;
}
.drop_menu_div a:hover{
    color: #FEDB03;
}

#drop_down_menu{
    display: none;
    
}

.dropdown{
    
    background-color: transparent;

}
.dropdown p{
    cursor: pointer;
}
.dropdown .btn_{
    background-color: transparent;
    margin: 0;
}
.dropdown_content a{
    text-decoration: none;
}
.dropdown_content{
    position: absolute;
    display: flex;
    flex-direction: column;
    gap: 15px;
    background-color: rgb(234, 234, 234);
    width: 200px;
    padding: 20px 20px;
    border-radius: 5px;
    display: none !important;
    margin-top: 3px;
}
.dropdown:hover .dropdown_content{
    display: block !important;
    display: flex !important;
}
.dropdown:hover .dropdown_content a:hover{
    color: #14E2A4;
}
a{
    text-decoration: none;
    color: black;
}



/*  */
@media screen and (max-width: 750px) {

    #ul_list{
        display: none !important;
    }
    #drop_down_menu{
        display: block;
        display: flex;
    }
}






    </style>
</head>
<body>
    <header id="header1">
        <style>
            
        </style>
        <div class="inner_sectiono inner_sectiono_left">
            <img src="https://scanme.website/wp-content/uploads/2023/11/cropped-Green-and-Orange-Organic-Food-Brand-Logo-6-e1699889084875.png" alt="">
        </div>
        <div class="inner_sectiono inner_sectiono_right">
            <ul id="ul_list">
            <div class="dropdown">
                <p class="btn_">Services</p>
                <div class="dropdown_content">
                    <a href="#">Dynamic Business</a>
                    <a href="#">Qr Code</a>
                </div>
            </div>
            
                <li><a href="#">Our Products</a></li>
                <li><a href="#">Price Chart</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">My Account</a></li>
            </ul>
            <!--  -->
            <div class="dropdown" id="drop_down_menu">
                <div class="menu_button">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <div class="drop_menu_div">
                    <a href="#">Dynamic Business</a>
                    <a href="#">Qr Code</a>
                    <a href="#">Our Products</a>
                    <a href="#">Price Chart</a>
                    <a href="#">About</a>
                    <a href="#">My Account</a>
                </div>
            </div>
            <!--  -->
        </div>
    </header>

    <script src="https://kit.fontawesome.com/40d90851b1.js" crossorigin="anonymous"></script>
    <script>
        let menu_button = document.querySelector("#drop_down_menu");
        let drop_menu_div = document.querySelector(".drop_menu_div");
        let count = 1;
        menu_button.addEventListener("click",function(){
             
            if(count == 1){
                drop_menu_div.style.display ="flex";
                drop_menu_div.style.backgroundColor= "#14E2A4";
                count = 0;
            }else{
                drop_menu_div.style.display ="none";
                count = 1;
            }
            
        })
    </script>

</body>
</html>

