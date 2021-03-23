<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="all.css" />
<title>메뉴 등록</title>
</head>
<body>
<header>
            <?php include "header.php" ?>
        </header>
	<form method="post" action="menu_ok.php" name="memform">
		<h1>메뉴등록 <a href="index.php">홈으로</a></h1>
			<fieldset>
				<legend>입력사항</legend>
					<table>
                        <tr>
							<td>메뉴명</td>
							<td><input type="text" size="35" name="name" placeholder="메뉴명" required></td>
						</tr>
						<tr>
							<td>가격</td>
							<td><input type="text" size="35" name="price" placeholder="가격" required></td>
						</tr>
						<tr>
							<td>가게명</td>
							<td><input type="text" size="35" name="storess" placeholder="가게명" required></td>
						</tr>
					</table>
				<input type="submit" value="등록하기" /><input type="reset" value="다시쓰기" />
		</fieldset>
	</form>
</body>
</html>