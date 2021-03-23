<?php 
session_start();
    $rid="";
    $level="";
    if( isset($_SESSION['rid'])) $rid= $_SESSION['rid']; 
    if( isset($_SESSION['level'])) $level= $_SESSION['level'];
?>
 
<!-- 헤더 영역의 로고와 회원가입/로그인 표시 영역 -->
        <div id="top">
            <!-- 1. 로고영역 -->
            <!-- include되면 삽입된 문서의 위치를 기준으로 -->
            <h3><a href="../index.php">전남대 오늘 뭐 먹을래?</a></h3> 
 
            <!-- 2. 회원가입/로그인 버튼 표시 영역 -->
            <ul id="top_menu">
                <!-- 로그인 안되었을 때 -->
                <?php if(!$rid){  ?>
                    <li><a href="signup_all.php">회원가입</a></li>
                    <li> | </li>
                    <li><a href="login_all.php">로그인</a></li>
                <?php }else{ ?>
                    <li><a href="logout.php">로그아웃</a></li>
                    <li> | </li>
                    <li><a href="mypage.php">개인정보수정</a></li>
                    <?php }?>
                    <?php if($level==1){?>
                    <li> | </li>
                    <li><a href="store1.php?id=<?php echo $rid;?>">가게정보사이트</a></li>
                    <li> | </li>
                    <li><a href="store_enter.php">가게입점</a></li>
                    <li> | </li>
                    <li><a href="menu.php">메뉴등록</a></li>
                <?php } ?>
                <?php if($level==2){?>
                    <li> | </li>
                    <li><a href="user_usual.php">개인사이트</a></li>
                <?php } ?>
                <?php if($level==0){?>
                    <li> | </li>
                    <li><a href="manager.php">관리자페이지</a></li>
                <?php } ?>
            </ul>
        </div>
 
        <!-- 헤더 영역의 네비게이션 메뉴 영역 -->
        <div id="menu_bar">
            <ul>
                <li><a href="../index.php">HOME</a></li>
            </ul>
        </div>
