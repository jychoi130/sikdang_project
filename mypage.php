<?php  
	include "db.php";
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="all.css" />
<meta charset="utf-8" />
<title>내 정보</title>
<style>
* {margin: 0 auto;}
a {color:#333; text-decoration: none;}
.find {text-align:center; width:500px; margin-top:30px; }
</style>
</head>
<body>
<header>
            <?php include "header.php" ?>
        </header>
	<div class="find">
		<form method="post" action="change_ok.php">
			<?php
				$sql = mq("select * from user where rid='{$_SESSION['rid']}'");
				while($user = $sql->fetch_array()){
					?>
			<h1>내 정보</h1>
			<p><a href="index.php">홈으로</a></p>
				<fieldset>
					<legend>마이페이지</legend>
						<table>
						<form action="change_ok.php?id=<?=$rid?>" method="post" name="rid">
							<tr>
								<td>아이디</td>
								<td><input type="text" size="35" name="rid" value="<?php echo $_SESSION['rid'];?>" disabled></td>
							</tr>
							<tr>
								<td>비밀번호</td>
								<td><input type="password" size="35" name="pw" placeholder="비밀번호"></td>
							</tr>
							<tr>
								<td>이름</td>
								<td><input type="text" size="35" name="name" placeholder="이름" value="<?php echo $user['name']; ?>"></td>
							</tr>
							<tr>
								<td>주소</td>
								<td><input type="text" size="35" name="address" placeholder="주소" value="<?php echo $user['address']; ?>"></td>
							</tr>
                            <tr>
								<td>번호</td>
								<td><input type="text" size="35" name="phone" placeholder="번호" value="<?php echo $user['phone']; ?>"></td>
							</tr>
						</table>
					<input type="submit" value="정보변경" />
			</fieldset>
			<?php } ?>
		</form>
	</div>
</body>
</html>
