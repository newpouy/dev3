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
					<a href="">����</a>
					<a href="">�α���</a>
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
						�ȳ��ϼ���. �̰��� �� �ʺ� �������� ���� ���� �н��̷°�
						����̷��� ����ϰ� �����ϴ� ���Դϴ�.<br /> � �ʱ⿡�� �н��� �� ���� ����� ���� �����غ��� �� ������
						���߰� ��� ��ȹ�Դϴ�.<br /><br /> �� ������Ʈ�� ���� ������ �� ��Ű���Ĵ� ������ �����ϴ�.<br /> <br />
						������: <a href="http://aws.amazon.com">�Ƹ��� Ŭ����</a> EC2 t1.micro<br />
						��������: <a href="http://www.git-scm.com">Git</a> and <a
							href="http://github.com">GitHub</a><br /> �ü��: <a
							href="http://aws.amazon.com">Amazon Linux</a> 3.2<br/>
						������: <a href="http://apache.org">Apache 2.2.22</a><br />
						WAS���� : ��Ĺ7.0 <br/> �������̵���: Java, JSP <br /> Ŭ���̾�Ʈ���̵� ���: html, css, Javascript,
						<a href="http://jquery.com">jQuery</a><br /> <br /> �������
						�ʺ��������Դϴٸ�, ���� ����� ���� ���Ǵ� ������ ȯ���մϴ�! <br />
						���� �ð���
						<%=new java.util.Date()%><br />
					</p>
					<div></div>
					<p>���� ������Ʈ: 2013.04.16</p>
				</div>
			</div>
		</div>
	</div>
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="twitterBootstrap/js/bootstrap.min.js"></script>
</body>
</html>