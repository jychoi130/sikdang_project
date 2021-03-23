<?php   
include $_SERVER['DOCUMENT_ROOT']."/db.php"; 
$rid="";
$level="";
if( isset($_SESSION['level'])) $level= $_SESSION['level'];
if( isset($_SESSION['rid'])) $rid= $_SESSION['rid']; 
?>
<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="all.css" />
	<meta charset="utf-8" />
    <title>가게별 페이지</title>
    <style>
        div{
            text-align:center;
        }
        #info{
            width:300px;
            height:550px;
            position:fixed;
            left:30px;
            top:200px;
            border:1px solid black;
            text-align:center;
        }
        #menu{
            width:300px;
            height:550px;
            position:fixed;
            left:360px;
            top:200px;
            border:1px;
            border:1px solid black;
        }
        #review{
            width:300px;
            height:550px;
            position:fixed;
            left:690px;
            top:200px;
            border:1px;
            border:1px solid black;
        }
        table{
            position:fixed;
            left: 460px;
            border:none;
        }
        th,td{
            border:none;
        }
    </style>

</head>
<body>
<header>
            <?php include "header.php" ?>
        </header>
    <?php
    $id=$_GET['id'];
    $hit=mysqli_fetch_array(mq("select * from store where manager='".$rid."'"));
    $sql = mq("select * from store where manager='".$rid."'");
    $store=$sql->fetch_array();
    $sid=$store['id'];
    ?>
    <h1><?php echo $store['id']; ?></h1>
    <div id="info">
        <h3>가게정보<hr></h3>
        <p>가게유형: <?php echo $store['type'];?></p>
        <p>전화번호: <?php echo $store['PHONE'];?></p>
        <p>가게시간: <?php echo $store['time'];?></p>
        <p>가게위치:  <?php echo $store['place'];?></p>
    </div>
    <div id="menu">
    <h3>메뉴<hr></h3>
    <?php
    $conn = mysqli_connect("localhost","root","0130","sikdang_project");
    $sql="SELECT * FROM menu where storess='".$sid."'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
    echo"<table> <tr> <th>메뉴</th><th></th><th>가격</th></tr>";
    $n=1;
    while($menu=mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $menu['name'] . "</td>";
        echo "<td></td>";
        echo "<td>" . $menu['price'] . "</td>";
        echo "</tr>";
        $n++;}
        echo "</table>";}
        else echo "menu가 없습니다.";
        ?>
    </div>
    <div id="review">
    <h3>리뷰<hr></h3>
    <?php
    $sql1="SELECT * FROM review where stores='".$sid."'";
    $result1=mysqli_query($conn,$sql1);
    if(mysqli_num_rows($result1)>0){
        echo"<table> <tr> <th>평점</th><th>리뷰내용</th><th>작성자</th></tr>";
        $n=1;
        while($review=mysqli_fetch_array($result1)){
            echo "<tr>";
            echo "<td>" . $review['score'] . "</td>";
            echo "<td width='200px'>". $review['reviewtext'] ."</td>";
            echo "<td width>" . $review['reviewer'] . "</td>";
            echo "</tr>";
            $n++;}
        echo "</table>";}
    else echo "review가 없습니다.";
        ?>  
         <?php if($level==2){?>
            <h3>리뷰 등록하기</h3>
        <form method="post" action="review_ok.php" name="memform">
			<fieldset>
					<table>
						<tr>
							<td>평점</td>
                            </tr>
							<tr><td><input type="text" size="35" name="score" placeholder="5점만점!" required></td>
							</td>
						</tr>
                        <tr>
							<td>리뷰내용</td>
                            </tr>
							<tr><td><input type="text" size="35" name="reviewtext" placeholder="리뷰내용을 작성하세요" required></td>
						</tr>
                        <tr>
							<td>가게명</td>
                            </tr>
							<tr><td><input type="text" size="35" name="store" placeholder="<?php echo $a; ?>" required></td>
						</tr>
					</table>
                    <br>
				<input type="submit" value="리뷰작성" /><input type="reset" value="다시쓰기" />
		</fieldset>
	</form>
                <?php } ?>
        
    </div>
</body>
</html>