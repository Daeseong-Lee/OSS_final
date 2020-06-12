<!DOCTYPE html>
<html>
<script type="text/javascript" src="http://code.jquery.com/jquery-3.4.1.min.js"></script>
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/NotoSansKR.css?v=1.2">
<style>
body {background-color: #eee; padding: 50px;}
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
	margin-top: 20px;
	color : #999;
	text-align : left ;
    }

    .re_div2 {
	margin-top: 10px;
	font-size = 15px;
	text-align : left ;
    }

    .re_div3 {
        margin-top: 40px;
        color: #100;
	text-align: left;
	font-size: 30px ;
    }
	.re_div4 {
	margin-top : 30px;
	font-size : 25px ;
	text-align : left ;
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
<body>
<?php header("Content-Type: text/html; charset=UTF-8"); 
//session_start(); 
?>
<a href="board.php">2019 Vision Capsule</a><br>

<?php 
header("Content-Type: text/html; charset=UTF-8");
$conn = new mysqli("localhost:3306", "admin", "raspberry", "visionDatabase");
mysqli_query ($conn, 'SET NAMES utf8');
$boardnum=$_GET['x']; // x-> num
$cookie_name = $boardnum; //쿠키 이름은 게시판 번호로 넣어준다.
$sql = "select *from tb_vision where num='$boardnum'"; // where boardnum='$boardnum'";
$res = $conn->query($sql);
$row=mysqli_fetch_array($res);
//if($res->num_rows!=1) {
//echo "<script>alert('존재하지 않는 게시물 경로입니다.'); location.href='board.php';</script>";
//exit();
//}
?>

<table>

<!--  <?php $title=str_replace(">","&gt",str_replace("<","&lt",$row['title'])); echo $title; ?> -->
<tr><th colspan="3"><div = class ="re_div3">Title : <?php $title=str_replace(">","&gt;",str_replace("<","&lt;",$row['title'])); echo $title; ?></div></th></tr>
<tr><th>Name : <?php echo $row['name']; ?></center></th>
<tr><th><div = class = "re_div">Student Number : <?php echo $row['student'];?></div></th></tr>


</table>
<div=class="re_div4"><br>>Vision</div><div = class = "re_div2">  <?php  echo str_replace("＆","&",$row['vision']); ?></div>
<div><?php $sql2 = "select *from upload where starttime='".$row['starttime']."' and nickname='".$row['name']."'";
$res2 = $conn->query($sql2);
while($row2=mysqli_fetch_array($res2)) {
echo "<div><a href='download.php?filepath=".$row2['changename']."&filename=".$row2['realname']."'>".$row2['realname']."</a></div>";
}
?></div>

</script>
</body>
</html>

