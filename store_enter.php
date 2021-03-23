<?php   
include "db.php"; ?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="all.css" />

    <title>가게입점</title>
    <style>
        h1{
            left:360px;
        }
        #info{
            width:300px;
            height:550px;
            position:fixed;
            left:30px;
            top:100px;
            border:1px solid black;
        }
        #time{
            width:300px;
            height:550px;
            position:fixed;
            left:360px;
            top:100px;
            border:1px;
            border:1px solid black;
        }
        #menu{
            width:300px;
            height:550px;
            position:fixed;
            left:690px;
            top:100px;
            border:1px;
            border:1px solid black;
        }

    </style>
</head>
<body>
<header>
            <?php include "header.php" ?>
        </header>
<h1>가게입점 페이지 <a href="index.php">홈으로</a></h1>
<form method="post" action="store_enter_ok.php" name="memform">
			<fieldset>
				<legend>입력사항</legend>
					<table>
						<tr>
							<td>가게명</td>
							<td><input type="text" size="35" name="name" placeholder="가게명" required></td>
							</td>
						</tr>
                        <tr>
							<td>번호</td>
							<td><input type="text" size="35" name="PHONE" placeholder="번호" required></td>
						</tr>
						<tr>
							<td>가게유형</td>
							<td><input type="text" size="35" name="type" placeholder="유형" required></td>
						</tr>
						<tr>
							<td>가게위치</td>
							<td><input type="text" size="35" name="place" placeholder="위치" required></td>
						</tr>
						<tr>
							<td>영업시간</td>
							<td><input type="text" size="35" name="time" placeholder="영업시간" required></td>
						</tr>
					</table>
				<input type="submit" value="입점신청" /><input type="reset" value="다시쓰기" />
		</fieldset>
	</form>
</body>
</html>