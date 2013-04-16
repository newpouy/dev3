<%@ page language="java" contentType="text/html; charset=EUC-KR"
	pageEncoding="EUC-KR"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=EUC-KR">
<title>Insert title here</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="twitterBootstrap/css/bootstrap.min.css" rel="stylesheet"
	media="screen">
<style type="text/css">
#headLine {
	background-color: #aaaaaa;
	height: 100px;
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
	margin-top: 20px;
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
</head>
<body>
	<div class="container">
		<div class="row-fluid">
			<div class="span12" id="headLine">
				<h1>Developing Diary</h1>
				<div id="headMenu">
					<a href="">Home</a>
					<a href="">방명록</a>
					<a href="">로그인</a>
				</div>
			</div>
			<div class="row-fluid" id="contents">
				<div class="span3" id="sideMenu">
					<div id="loginForm">
						id: <input class="span5" type="text" name="id"/><br/>
						pw: <input class="span5" type="password" name="password"/>
					</div>
				</div>
				<div class="span9" id="eachContent">
					<p>
						안녕하세요. 이곳은 한 초보 개발자의 개발 관련 학습이력과
						기술이력을 기록하고 관리하는 곳입니다.<br /> 운영 초기에는 학습한 웹 관련 기술을 실제 적용해보는 데 초점을
						맞추고 운영할 계획입니다.<br /><br /> 이 웹사이트의 서버 인프라 및 아키텍쳐는 다음과 같습니다.<br /> <br />
						인프라: <a href="http://aws.amazon.com">아마존 클라우드</a> EC2 t1.micro<br />
						버전관리: <a href="http://www.git-scm.com">Git</a> and <a
							href="http://github.com">GitHub</a><br /> 운영체제: <a
							href="http://aws.amazon.com">Amazon Linux</a> 3.2<br/>
						웹서버: <a href="http://apache.org">Apache 2.2.22</a><br />
						WAS서버 : 톰캣7.0 <br/> 서버사이드언어: Java, JSP <br /> 클라이언트사이드 언어: html, css, Javascript,
						<a href="http://jquery.com">jQuery</a><br /> <br /> 어리버리한
						초보개발자입니다만, 관련 기술에 관한 문의는 언제나 환영합니다! <br />
						지금 시각은
						<%=new java.util.Date()%><br />
					</p>
					<div></div>
					<p>최종 업데이트: 2013.04.16</p>
				</div>
			</div>
		</div>
	</div>
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="twitterBootstrap/js/bootstrap.min.js"></script>
</body>
</html>