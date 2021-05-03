<?php
	include "./config.php";
	include "./db/db_con.php";
	include "./loginCheck.php";
	
	$bno = $_GET['idx']; // $bno에 idx값을 받아와 넣음
	/* 받아온 idx값을 선택해서 게시글 정보 가져오기 */
	$sql = mq("select 
				 * 
			   from 
				 board 
			   where 
				 idx='$bno'
			");
	$board = $sql->fetch_array();	
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
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<!-- 표준 네비게이션 바 (화면 상단에 위치, 화면에 의존하여 확대 및 축소) -->
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
		</nav>
		<div class="container">
			<div id="board_write">
                <form action="updateOk.php/<?php echo $board['idx']; ?>" method="post">
                <input type="hidden" name="idx" value="<?=$bno?>" />
					<table class="table table-striped" style="text-align: center; border: 1px solid #ddddda">
						<thead>
							<tr>
								<th colspan="2" style="background-color: #eeeeee; text-align: center;"><h3>글 수정하기</h3></th>
							</tr>
						</thead>	
						<tbody>
							<tr>
								<td><span class="pull-left">&nbsp;&nbsp;&nbsp;아이디 : <b><?=$userid?></b></span></td>
							</tr>
							<tr>
								<td><input type="text" class="form-control" placeholder="글 제목" name="title" id="utitle" value="<?=$board['title']?>" required></td>
							</tr>
							<tr>
								<td><input type="password" class="form-control" placeholder="글 비밀번호" name="pw" id="upw" style="width: 150px;"></td>
							</tr>
							<tr>	
								<td><textarea class="form-control" placeholder="글 내용" name="content" id="ucontent" style="height: 350px" required><?=$board['content']?></textarea></td>
							</tr>
						</tbody>
					</table>
					<button type="submit" class="btn btn-primary">글쓰기</button>
				</form>
			</div>
		</div>
		<script src="./js/login.js"></script>       
	</body>
</html>