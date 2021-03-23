<?php include  $_SERVER['DOCUMENT_ROOT']."/db.php";
 ?>

<!doctype html>
<head>
<meta charset="UTF-8">
<title>위치별</title>
<link rel="stylesheet" type="text/css" href="all.css" />
<style>
* {
	margin: 0 auto;
	padding: 0;
	font-family: 'Malgun gothic','Sans-Serif','Arial';
}
a {
	text-decoration: none;
	color:#333;
}
ul li {
	list-style:none;
}

/* 공통 */
.fl {
	float:left;
}
.tc {
	text-align:center;
}
p{
  text-align:right;
}

/* 게시판 목록 */
#board_area {
	width: 900px;
	position: relative;
}
.list-table {
	margin-top: 40px;
}
.list-table thead th{
	height:40px;
	border-top:2px solid #09C;
	border-bottom:1px solid #CCC;
	font-weight: bold;
	font-size: 17px;
}
.list-table tbody td{
	text-align:center;
	padding:10px 0;
	border-bottom:1px solid #CCC; height:20px;
	font-size: 14px 
}
#write_btn {
	position: absolute;
	margin-top:20px;
	right: 0;
}
h1{
  text-align:center;
}
</style>
</head>
<body>
<header>
            <?php include "header.php" ?>
        </header>
<div id="board_area"> 
  <h1><br><br><?php echo $_POST['var_value1']?></h1>
    <table class="list-table">
      <thead>
          <tr>
                <th>가게명</th>
                <th>번호</th>
                <th>유형</th>
                <th>위치</th>
            </tr>
        </thead>
        <?php
          $a= $_POST['var_value1'];
          $sql = mq("select * from store where '{$a}'=place order by count desc limit 0,5"); 
          $n=1;
          echo "<tbody>";
            while($store=$sql->fetch_array()){
              echo "<tr>";
              echo "<td width='400'>"?><a href='store.php?name=<?php echo $store['id'];?>'><?php echo $store['id'];?></a></td>
              <?php 
              echo " <td width='100'>" .$store["PHONE"]. "</td>";
              echo " <td width='100'>" .$store["type"]. "</td>";
              echo " <td width='100'>" .$store["place"]. "</td>";
              echo "</tr>";
              $n++;
            }
            echo "</tbody>";
            ?>
    </table>
  </div>
</body>
</html>