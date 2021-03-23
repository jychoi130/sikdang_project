<?php   
include "db.php"; ?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>회원가입 및 로그인 사이트</title>
	<link rel="stylesheet" type="text/css" href="all.css" />
<link rel="stylesheet" type="text/css" href="common.css" />


<style>

#btn 
{
  width:95px;
  height:55px;
  background-color: #443e58;
  border:solid 1px #443e58;
  color:white;
}
#menu_bar{height: 48px; background-color: #443e58; font-size: 16px; top:30px; left:200px;}
#menu_bar ul{width: 1000px;margin: 0 auto; padding: 14px 0px 14px 80px;}
#menu_bar ul li{display: inline; margin-right: 90px;}
#menu_bar ul li a{color: white;}
#top{ width: 1000px; height: 80px; margin: 0 auto; position: relative;}
 
/* 로고 제목 위치와 폰트 사이즈 */
#top h3{position: absolute; top: 25px; left: 40px; font-size: 28px;}
 
/* 회원가입/로그인 글씨 위치 */
#top #top_menu{position: absolute; top: 30px;right: 60px;}
#top #top_menu li{display: inline-block;}

</style>
</head>
<body>

<div id="top">
            <!-- 1. 로고영역 -->
            <!-- include되면 삽입된 문서의 위치를 기준으로 -->
            <h3><a href="../index.php">전남대 오늘 뭐 먹을래?</a></h3> 
 </div>
<div id="menu_bar">
            <ul>
                <li><a href="../index.php">HOME</a></li>
            </ul>
        </div>
		<br><br>
	<div id="login_box">
		<h1>로그인</h1>							
			<form method="post" action="login_ok_all.php">
				<table align="center" border="0" cellspacing="0" width="300">
        			<tr>
            			<td width="130" colspan="1"> 
                		<input type="text" name="rid" class="inph">
            		</td>
            		<td rowspan="2" align="center" width="100" > 
                		<button type="submit" id="btn" >로그인</button>
            		</td>
        		</tr>
        		<tr>
            		<td width="130" colspan="1"> 
               		<input type="password" name="pw" class="inph">
            	</td>
        	</tr>
        	<tr>
           		<td colspan="3" align="center" class="mem"> 
				   <br>
                      <a href="/signup_all.php">회원가입</a>
           </td>
        </tr>
    </table>
  </form>
</div>
</body>
</html>