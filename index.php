<?php
	include_once "./config.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MOONSHOT e-sports</title>
  <link rel="stylesheet" href="./css/index.css">
  <link rel="stylesheet" href="./style.css">
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="wrap">
    <div id="header">
      <div class="wrapper">
        <div >
          <h1 class="logo">
            <a href="index.php" class="logoMain">
              <img src="./files/images/logo0.png" class="logoImage">
              <span class="hidden">MOONSHOT e-sports</span>
            </a>
          </h1>
        </div>
        <nav id="gnb">
          <ul class="groupNav">
            <li class="navItem"><a href="#">ABOUT MS</a></li>
            <li class="navItem"><a href="#">TOURNAMENT</a></li>
            <li class="navItem"><a href="#">TEAM</a></li>
            <li class="navItem"><a href="#">JOB INFO</a></li>
            <li class="navItem"><a href="test.php">NEWS</a></li>
            <li class="navItem"><a href="list.php">COMMUNITY</a></li>
          </ul>
          <ul class="snsNav">
            <div class="snsLink"></div>
          </ul>
        </nav>
      </div>
    </div>
    <div id="container">
      <div class="container">
        <div class="contentLeft">
          <div class="leagueBanner">
            <a href="#">
              <img src="./files/images/banner0.png" alt="리그배너1"  class="bannerSlide">
            </a>
          </div>
          <div class="boards">
            <div class="boardsNav">
              <ul class="groupBoardsNav">
                <li class="boardsNavItem"><a href="#">NEW</a></li>
                <li class="boardsNavItem"><a href="#">JOB</a></li>
                <li class="boardsNavItem"><a href="#">TEAM</a></li>
                <li class="boardsNavItem"><a href="#">COMMUNITY</a></li>
              </ul>
            </div>
            <div class="boardsContent">
              <div class="contentFeed"></div>
              <div class="contentFeed"></div>
              <div class="contentFeed"></div>
              <div class="contentFeed"></div>
              <div class="contentFeed"></div>
              <div class="contentFeed"></div> 
            </div>
          </div>
        </div>
        <div class="contentRight">
          <div class="loginArea">
              <div id="login" class="loginWrap ">
                  <div class="login">
                    <!--
                    <form id="loginProcess" autocomplete="off" method = "post" action="loginCheck">
                      <input type="hidden" name="standard" value="index.html">
                      <input type="hidden" name="loginToken"  value="">
                      <fieldset>
                        <legend class="blind">로그인</legend>
                        <div class="loginInput">
                          <div class="inputBox">
                            <label for="userId" id="idLabel" class="labLogin">ID</label>
                            <input type="text" id="userId" name="userId" class="inpTxt" maxlength="50"  value="">
                          </div>
                          <div class="inputBox">
                            <label for="pw" id="pwdLabel" class="labLogin">Password</label>
                            <input type="password" id="pw" name="pw" class="inpTxt" maxlength="32" >
                          </div>
                        </div>
                        <button type="button" id="loginOk" class="btnInoutLogin">로그인</button>
                        <div class="loginSet">
                          <div class="checkId">
                            <span class="checkbox">
                              <input type="checkbox" id="idsave" class="icoCheck" name="idCookie">
                              <em class="checkmark"></em>
                              <label for="idsave">ID 저장</label>
                            </span>
                          </div>
                        </div>
                      </fieldset>
                    </form>     -->
                  <!-- 로그인 후 -->
                  <?php 
			            	if(!$userid){
			            ?>    
                  <div class="loginInput">
                      <form name="loginSbmt" id="loginSbmt" method="post" action="loginOk.php">
                        <h3 class="hidden">로그인</h3>
                        <div class="col-lg-4"></div>
                        <div class="inputBox">
                          <div class="form-group">
                            <label for="userId" id="idLabel" class="labLogin">ID</label>
                            <input type="email" class="form-control" name="id" maxlength="15">
                          </div>
                          <div class="form-group">
                            <label for="pw" id="pwdLabel" class="labLogin">Password</label>
                            <input type="password" class="form-control" name="pass" maxlength="20">
                          </div>
                        </div>
                        <a href="#" class="btnLogin"><span class="btnInoutLogin" onclick="check_input()"><p>로그인</p></span></a>
                        <a href=join.php><p>회원가입</p></a>
                        <div class="loginSet">
                          <div class="checkId">
                            <span class="checkbox">
                              <input type="checkbox" id="idsave" class="icoCheck" name="idCookie">
                              <em class="checkmark"></em>
                              <label for="idsave">ID 저장</label>
                            </span>
                          </div>
                        </div>
                      </form>
                      <?php 
			                	}else if($userid){	
					              $logged = $username."(".$userid.")";
			                ?>
				<ul class="#">
					<li class="#">
						<a href="#" class="#" data-toggle="#" role="button" 
						aria-haspopup="true" aria-expanded="false"><b><?=$logged ?></b>님의 회원관리<span class="caret"></span></a>
						<ul class="#">
							<li><a href="logout.php">로그아웃</a></li>
						</ul>
					</li>
				</ul>
			<?php }?>
              <div class="contentHolder"></div>
          </div>
			</div>
        </div>
	    	<script src="./js/login.js"></script>
      </div>
    </div>
    </div>
    <div id="footer"></div>
  <script src="./vue/vue.js"></script>
  <script src="./vue/vue-router.js"></script>
  <script src="./js/main.js"></script>
</body>
</html>
