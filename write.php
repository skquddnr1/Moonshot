<?php
	include "./config.php";
	include "./db/db_con.php";
	include "./loginCheck.php";
?>
<!DOCTYPE html>
<html>
	<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MOONSHOT e-sports</title>
  <link rel="stylesheet" href="./css/index.css">
  <link rel="stylesheet" href="./style.css">
	
	</head>
	<body>
	<div class="wrap">
    <div id="header">
      <div class="wrapper">
        <div >
          <h1 class="logo">
            <a href="index.html" class="logoMain">
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
            <li class="navItem"><a href="#">NEWS</a></li>
            <li class="navItem"><a href="list.php">COMMUNITY</a></li>
          </ul>
          <ul class="snsNav">
            <div class="snsLink"></div>
          </ul>
        </nav>
      </div>
    </div>	
	</nav>
		<div class="container">
			<div id="board_write">
                <form action="write_ok.php" method="post">
					<table class="table table-striped" style="text-align: center; border: 1px solid #ddddda">
						<thead>
							<tr>
								<th colspan="2" style="background-color: #eeeeee; text-align: center;"><h3>게시판 글쓰기</h3></th>
							</tr>
						</thead>	
						<tbody>
							<tr>
								<td><span class="pull-left">&nbsp;&nbsp;&nbsp;아이디 : <b><?=$userid?></b></span></td>
							</tr>
							<tr>
								<td><input type="text" class="form-control" placeholder="글 제목" name="title" id="utitle" required></td>
							</tr>
							<tr>
								<td><input type="password" class="form-control" placeholder="글 비밀번호" name="pw" id="upw" style="width: 150px;"></td>
							</tr>
							<tr>	
								<td><textarea class="form-control" placeholder="글 내용" name="content" id="ucontent" style="height: 350px" required></textarea></td>
							</tr>
						</tbody>
					</table>
					<input type="checkbox" value="1" name="lockpost">비밀글<br><br> 
					<button type="submit" class="btn btn-primary">글쓰기</button>
				</form>
			</div>
		</div> 
		<script src="./js/login.js"></script>	      
	</body>
</html>