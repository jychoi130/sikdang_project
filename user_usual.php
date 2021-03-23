<?php   
include "db.php";
    $rid="";
    $level="";
    if( isset($_SESSION['rid'])) $rid= $_SESSION['rid']; 
    if( isset($_SESSION['level'])) $level= $_SESSION['level']; ?>
<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="all.css" />
	<meta charset="utf-8" />
    <title>소비자 페이지</title>
    <style>
        #review{
            width:300px;
            height:550px;
            position:fixed;
            left:30px;''
            top:200px;
            border:1px solid black;
            text-align:center;
        }
        #check{
            width:300px;
            height:550px;
            position:fixed;
            left:360px;
            top:200px;
            border:1px;
            border:1px solid black;
        }
    </style>
</head>
<body>
<header>
            <?php include "header.php" ?>
        </header>
<h1><br><?php echo $rid;?>의 페이지</h1>

    <div id="review">
    <table class="list-table">
    <h3>작성한 리뷰<hr></h3>
      <thead>
          <tr>
                <th>가게명</th>
                <th>평점</th>
                <th>리뷰내용</th>
            </tr>
        </thead>
        <?php
          $sql = mq("select * from review where '{$rid}'=reviewer order by id desc limit 0,5"); 
          $n=1;
          echo "<tbody>";
          while($review=$sql->fetch_array()){
            echo "<tr>";
            echo " <td>" .$review["stores"]."</td>";
            echo " <td>" .$review["score"]. "</td>";
            echo " <td>" .$review["reviewtext"]. "</td>";
            echo "</tr>";
            $n++;
          }
          echo "</tbody>";
          ?>
    </table>
    </div>
    <div id="check">
        
    </div>
</body>
</html>