
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Developing Diary</title>


<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/common/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<style type="text/css">
#headLine {
	background-color: #aaaaaa;
	height: 120px;
	margin-bottom: 5px;
}
#contents {
	height: 800px;
	
}
#sideMenu {
	background-color: #bbbbbb;
	height: 600px;
}
#loginForm {
	margin: 30px;
}
#eachContent {
	margin-top: 10px;
}
#headMenu {
	float: right;
	margin-right: 5px;
	padding-right: 5px;
}
#headMenu a {
	float: left;
	margin: 5px;
	margin-bottom: 3px;
	color: #333333;
}
h1 {
 margin-left: 10px;
}

</style>

<script src="http://code.jquery.com/jquery.js"></script>
<script src="/common/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript">

</script>

</head>
<body>
	<div class="container">
		<div class="row-fluid">
			<div class="span12" id="headLine">
				<h1>Develop-ing Diary</h1><br/>
				&nbsp;알림: 방명록과 개발일기 만들었습니다. 개발일기는 매일 업데이트됩니다(아마도...).
				<div id="headMenu">
					<a href="/dev3">Home</a>
					<a href="/diary">개발일기</a>
					<a href="/dev3/visit_rec/1">방명록</a>
					<a href="/dev3/logout">로그아웃</a>
				</div>
			</div>
			<div class="row-fluid" id="contents">
				<div class="span3" id="sideMenu">
					<?php
					session_start();
						if(!isset($_SESSION['is_login'])){//세션이 셋팅되지 않았다면
							session_destroy();
							echo '
							<div id="loginForm">
						<form action="/dev3/login" method="post">
						<table>
							<tr>
							<td>ID</td>
							<td><input class="span5" type="text" name="id"/></td>
						</tr>
						<tr>
							<td>PW</td>
							<td><input class="span5" type="password" name="pw"/></td>
						</tr>
						</table>
						<button class="btn">로긴</button>
						</form>
					</div>
							';
						}else{//세션이 세팅되었지만
							if($_SESSION['is_login']==false){//로그아웃이라면
								session_destroy();
							echo '
							<div id="loginForm">
						<form action="/dev3/login" method="post">
						<table>
							<tr>
							<td>ID</td>
							<td><input class="span5" type="text" name="id"/></td>
						</tr>
						<tr>
							<td>PW</td>
							<td><input class="span5" type="password" name="pw"/></td>
						</tr>
						</table>
						<button class="btn">로긴</button>
						</form>
					</div>
							';
							}
						}
					
					?>
					
					<div id="develop">
						<a href="jquery_ex.jsp">-jQuery</a>
					</div>
				</div>