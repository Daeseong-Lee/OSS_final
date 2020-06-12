<!DOCTYPE html>
<html>
<script type="text/javascript" src="http://code.jquery.com/jquery-3.4.1.min.js"></script>
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/NotoSansKR.css?v=1.2">
<style>
body {background-color: #eee; padding: 50px;}
</style>
<body>
<?php header("Content-Type: text/html; charset=UTF-8"); 
session_start(); ?>
<a href="board.php"><span>2019 Vision Capsule</span></a><br>

<?php 
header("Content-Type: text/html; charset=UTF-8");
$conn = new mysqli("localhost:3306", "admin", "raspberry", "visionDatabase");
mysqli_query ($conn, 'SET NAMES utf8');
if(isset($_GET['page'])) {
$page = $_GET['page'];
} else {
$page = 1;
}
if(isset($_GET['pagination'])){
    $pagination = $_GET['pagination'];
}else{
    $pagination = 1;
}
$sql = "select *from tb_vision";
$res = $conn->query($sql);
$totalboardnum = mysqli_num_rows($res); //총 게시물 수
$totalpagenum = ceil($totalboardnum/10); //총 페이지 수 = 총 게시물 수 / 한 페이지당 나타낼 게시물 수
$totalblocknum = ceil($totalpagenum/5); //총 블록 수 = 총 페이지 수 / 한 블록에 나타낼 페이지 수
$currentpagenum = (($page-1)*10); //현재 페이지 번호 = (페이지 번호-1)*10
$sql2 = "select *from tb_vision order by num asc limit $currentpagenum, 10";
$res2 = $conn->query($sql2);
$num2=(($page-1)*10)+1;
?>
<br>
<br>
<br>
<center>
<div>
<table><tr><th>Index</th><th>Title</th><th>Name</th><th>Student ID</th></tr> 
<?php while ($row=mysqli_fetch_array($res2)) {// echo "$row";
$num=$row['num'];
$title=str_replace(">","&gt",str_replace("<","&lt",str_replace($row['title'], mb_substr($row['title'],0,40,"utf-8")."...",$row['title'])));
$title2=str_replace(">","&gt",str_replace("<","&lt",$row['title']));

?>
<tr style = "cursor:pointer;" onClick = "location.href='/boardread.php?x=<?php echo $num;?>'"><th><?php echo $num2;?></th><th><?php if(mb_strlen($row['title'],"utf-8") > 30) {echo $title;} else {echo $title2;}?></th><th><?php echo $row['name'];?></th><th><?php echo mb_substr($row['student'],0,11,"utf-8");?></th></tr>
<?php $num2++;}?>
</table>
</div>
<div>
<div>
<?php 
$before=$pagination-1; //현재 블록 위치 -1
$after=$pagination+1; //현재 블
$before2=$before*5; //변동 요망
$after2=$after*5-4;
if($pagination>1)
{
    echo "<a href='/board.php?pagination=$before&page=$before2'>&laquo;</a>";
}
for($i=$pagination*5-4; $i<=$pagination*5; $i++)
{
    if($i<=$totalpagenum) {
    echo "<a href='/board.php?pagination=$pagination&page=$i'>[$i]</a>";
    } else {
        break;
    }
}
if($pagination<$totalblocknum) {
    echo "<a href='/board.php?pagination=$after&page=$after2'>&raquo;</a>";
}
?>
</center>
</body>
</html>

