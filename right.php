<!DOCTYPE html>
<html>
<HEAD> 
<script type="text/javascript" src="http://code.jquery.com/jquery-3.4.1.min.js"></script>
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/NotoSansKR.css?v=1.2">
<style>
body {background-color: #eee; padding: 50px;}
</style>
<body>
<a href="javascript:void(0);" class="sh-side-options-item-trigger-demos" style="font-size:20px;">>Make Vision Capsule</a>

<?php
	$mysql_host = 'localhost:3306' ;
	$mysql_user = 'admin' ;
	$mysql_password = 'raspberry' ;
	$mysql_db = 'visionDatabase' ;
	$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db) ;
?>
<script type="text/javascript">
	function counter(){
		var dday = new Date("June 21,2021,00:00:00").getTime(); //디데이
		setInterval(function(){
			var now = new Date(); //현재 날짜 가져오기
			var distance = dday - now;
			var d = Math.floor(distance / (1000 * 60 * 60 * 24));
			var h = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var m = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			var s = Math.floor((distance % (1000 * 60)) / 1000);
			if(s < 10){
				s = '0'+s;
			}
			$('.content').html("Next Open D-Day  >>   " + d+' : '+h+ ' : '+m + ' : ' + s);
			
		}, 1000);
	}
	counter();
</script>
<br>
<br>
<div class="content"></div>
<center>
<img src = "./handong.png" width = "140*5" height = "90*5" > </img>
</center>
<a
href="board.php"
onfocus="this.blur()"
rel="nofollow"
style="text-decoration:none; color: white; display: scroll; left: 20px; position: absolute; top: 800px;"
target="_blank"
title="Home"
>

<div
align="center"
style="background: #41A641; border-radius: 17px; font-family: 굴림; font-size: 22px; font-weight: bold; height:auto; padding:5px 0px 5px 0px; width:150px; border-bottom:2px double gold;
">
2019 Vision Capsule
</div>

</a>
<style>

    .sh-side-options {
        position: fixed;
        top: 0;
        bottom: 0;
        right: 0;
        z-index: 12345678902;
        transition: 0.3s all ease;
        transition: 0.2s all;
        padding: 0 0;
        width: 420px;
        transform: translateX(420px);
    }

    .sh-side-options.open {
        transform: translateX(0px);
        box-shadow: 0 0px 39px 10px rgba(0, 0, 0, 0.2);
    }

    .sh-side-options-container {
        position: absolute;
        bottom: 50px;
        left: -125px;
        width: 60px;
        background-color: rgba(255, 255, 255, 1);
        border-radius: 5px;
        margin-right: 15px;
        box-shadow: -10px 0px 20px 2px rgba(0, 0, 0, .06);
    }


    .sh-side-options-item {
        display: block;
        text-align: center;
        margin: 0px;
        transition: 0.3s all ease-in-out;
        position: relative;
        padding: 7px;
        cursor: pointer;
    }

    .sh-side-options-item:not(:last-child) {
        border-bottom: 1px solid #f1f3fc;
    }

    .sh-side-options-item-container {
        border-radius: 4px;
        padding: 8px 0;
    }

    .sh-side-options-item:hover .sh-side-options-item-container,
    .sh-side-options-item:focus .sh-side-options-item-container,
    .sh-side-options.open .sh-side-options-item-trigger-demos .sh-side-options-item-container {
        background-color: #f3f5fd;
    }

    .sh-side-options-item i {
        font-size: 22px;
    }

    .sh-side-options-item:not(:hover):not(:focus) {
        color: #9396a5 !important;
    }

    .sh-side-options-item:hover .sh-side-options-hover {
        opacity: 1;
        transform: translateX(-97%);
    }

    .sh-side-options-hover {
        position: absolute;
        background-color: #ffffff;
        color: #32343d;
        padding: 20px 26px;
        transform: translateX(-70%);
        left: 0px;
        top: 0;
        bottom: 0;
        opacity: 0;
        transition: 0.2s all ease-in-out;
        z-index: -100;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
        font-size: 13px;
        box-shadow: 0px 0px 20px 2px rgba(0, 0, 0, 0.08);
    }

    .sh-side-options-hover span {
        padding: 0px 3px;
    }

    .sh-side-options-item i {
        color: #9396a5 !important;
    }

    .sh-side-options.open .sh-side-options-item-trigger-demos i,
    .sh-side-options-item:hover i,
    .sh-side-options-item:focus i {
        color: #294cff !important;
    }

    .sh-side-demos-container {
        top: 0;
        left: 0;
        right: -17px;
        bottom: 0;
        position: absolute;
        overflow-y: scroll;
        background-color: #fff;
        background-repeat: no-repeat;
        background-position: right top;
        padding: 22px;
    }

    .sh-side-demos-container-close {
        position: absolute;
        top: 30px;
        right: 50px;
        cursor: pointer;
    }

    .sh-side-demos-container-close i {
        color: #c5c5c5;
        font-size: 18px;
        transition: 0.3s all ease;
    }

    .sh-side-demos-container-close:hover i,
    .sh-side-demos-container-close:focus i {
        color: #7f7f7f;
    }


    /* Demo Items */
    .sh-side-demos-loop-container {
        position: relative;
        margin: 0 -10px;
        margin-top: 28px;
    }

    .sh-side-demos-item {
        display: inline-block;
        position: relative;
        margin-right: -4px;
        margin-bottom: 25px;
        width: 50%;
        padding: 0 10px;
        text-align: center;
        transition: .3s all ease;
        top: 0;
    }

    .sh-side-demos-item:hover {
        top: -4px;
    }

    .sh-side-demos-item .sh-image-lazy-loading {
        border-radius: 3px;
        box-shadow: 0 2px 20px 1px rgba(0, 0, 0, .1);
    }

    .sh-side-demos-item img {
        border-radius: 3px;
    }

    .sh-side-demos-item-name {
        font-size: 12px;
        color: #32343d;
        font-weight: 600;
        padding-top: 10px;
    }

    .sh-side-demos-item-tag {
        position: absolute !important;
        width: auto !important;
        height: auto !important;
        top: 4px;
        left: 6px;
        background-color: #ff5944;
        color: #fff;
        font-size: 9px;
        font-weight: 600;
        display: block;
        padding: 1px 9px;
        text-transform: capitalize;
        border-radius: 100px;
    }

    @media (max-width: 1000px) {

        .sh-side-options {
            /*display: none;*/
        }

        .sh-side-options {
            width: 350px;
            transform: translateX(350px);
        }

        .sh-side-options-container {
            bottom: 30px;
            left: -95px;
            margin-right: 15px;
        }

    }

</style>

<style>

    /* 폼예제 css */
    .re_input {
        width: 100%;
        height: 40px;
        border: 0px;
        border-radius: 4px;
        background-color: #f3f3f3;
        padding-left: 10px;
        line-height: 40px;
        color: #666 !important;
        font-size: 12px;
    }

    .re_input::placeholder {
        color: #999 !important;
        font-size: 12px;
    }

    .re_input2 {
        width: 97%;
        height: 150px;
        border: 0px;
        border-radius: 4px;
        background-color: #f3f3f3;
        padding: 10px;
        color: #666 !important;
        font-size: 12px;
    }

    .re_input2::placeholder {
        color: #999 !important;
        font-size: 12px;
    }

    .re_div {
        margin-top: 20px
    }

    .re_div2 {
        margin-top: 10px
    }

    .re_div3 {
        margin-top: 40px;
        color: #999;
        text-align: left;
    }

    .re_input3 {
        display: block;
        border: 0px;
        border-radius: 4px;
        background-color: #FFCC00;
        line-height: 40px;
        color: #000 !important;
        font-size: 14px;
        text-align: center;
        cursor: pointer;
    }

    .re_div3 h1 {
        font-size: 22px;
        letter-spacing: -1px;
        color: #333;
    }

    .re_div3 span {
        color: #333
    }

    /* 폼예제 css */
    
</style>


<div class="sh-side-options sh-side-options-pages">
    <div class="sh-side-options-container" style="margin-top:100px">
        
    
        <a class="sh-side-options-item sh-side-options-item-trigger-demos sh-accent-color">
            <div class="sh-side-options-item-container"><img src="./image/open_btn.png"></div>
            <div class="sh-side-options-hover" style="padding-top:15px">Request</div>
        </a>
       

    </div>


    <div class="sh-side-demos-container">
        
        
        <div class="sh-side-demos-container-close">
            <img src="./image/close_btn.png">
        </div>
      

        <div class="sh-side-demos-loop">
            <div class="sh-side-demos-loop-container" style="padding:0px 30px 0px 20px">

                <!-- 컨텐츠 시작 -->
                
                <div class="re_div3">
                    <h1><strong>Vision Capsule</strong></h1><br>
                </div>

                This is digital Vision Capsule<br>
                Write donw your vision.

<form method="POST" action="right.php">
                    <div class="re_div">
                        <input type="text" class="re_input font-r" required id="" name="name" placeholder="Name *" style="width:70%;">
                    </div>

                    <div class="re_div2">
                        <input type="text" class="re_input font-r" required id="" name="student" placeholder="Student Number *" style="width:60%;">
                    </div>

                    <div class="re_div2">
                        <input type="text" class="re_input font-r" required id="" name="title" placeholder="Vision title *" style="width:90%;">
		    </div>

                    <div class="re_div2">
                        <input type="text" textarea id="" name="vision" class="re_input2 font-r" required placeholder="Vision Detail *"></textarea>
                    </div>

		    <div class="re_div">
			<input type="submit" value="Send it" id="contact_submit" class="re_input3 font-b" style="width:200px;" />

                    </div>
</form>



 <?php
	extract($_POST);
	$insertQuery = "insert into tb_vision2020 (name,student, title, vision) values ('$name','$student','$title','$vision')";
	if(($name !=NULL)&($student != NULL) & ($title!=NULL) & ($vision!=NULL)){
        	$result = mysqli_query($conn,$insertQuery);
		echo '<script type="text/javascript">alert("Vision Capsule has been sent.");</script>';
	}
      //데이터가 전달되었으면 새로고침하기
        if (($_POST['name'] != NULL)&($_POST['student'] != NULL)&($_POST['title'] != NULL)
            &($_POST['vision'] != NULL)){
         echo "<meta http-equiv='refresh' content='1;right.php' />";
        }
        mysqli_close($conn);
    ?>


                    <div class="re_div3">
                        <h1><strong>Information</strong></h1><br>

                        <span>Due Day_ </span>  2020.06.21<br>
                        <span>Organizer_</span>  Handong Global University<br>
                        <br>
                        <br>
                        <span>Phi 4:13 NIV.</span>　I can do everything through him who gives me strength.<br>
			<br>
			<span>Why not Change the world.</span><br>
                    </div>

                <!-- //컨텐츠 끝 -->

            </div>
        </div>

    </div>


</div>


<script type="text/javascript">
    jQuery(document).ready(function($) {

        $('.sh-side-options-item-trigger-demos').on('click', function() {
            $('.sh-side-options').css('transition', '0.3s all ease-in-out');

            if ($('.sh-side-options').hasClass('open')) {
                $('.sh-side-options').removeClass('open');
            } else {
                $('.sh-side-options .sh-side-demos-image').each(function() {
                    $(this).attr('src', $(this).attr('data-src'));
                });
                $('.sh-side-options').addClass('open');
            }
        });

        $('.sh-side-demos-container-close').on('click', function() {
            $('.sh-side-options').css('transition', '0.3s all ease-in-out');
            $('.sh-side-options').removeClass('open');
        });
    });
</script>
</body>
</html>

<?php include_once('./right.php'); ?>

