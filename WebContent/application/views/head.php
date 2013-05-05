
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Developing Diary</title>


<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/common/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="/common/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
<style type="text/css">
#headLine {
	background-color: #eeeeee;
	height: 120px;
	margin-bottom: 0px;
}
#contents {
	height: 800px;
	
}
#sideMenu {
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
.widthWide {
	width: 800px;
}
</style>

<script src="/common/jquery-1.9.1.js"></script>
<script src="/common/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript">
$(function(){
	$('[rel="tooltip"]').tooltip('toggle');
	$('[rel="tooltip"]').tooltip('hide');
	$('#tw').attr("data-original-title","OAuth방식으로 연동되어 당신의 타임라인을 이곳에서 볼 수 있사옵니다. 개인정보는 저장할수 없사옵니다.")
		.tooltip('toggle').tooltip('hide').next('div').addClass('widthWide');
});

</script>

</head>
<body>
	<div class="">
		<div class="row-fluid">
			<div class="span12" id="headLine">
				<a href="/" style="color: #222"><h1>Develop-ing Diary</h1>
					
				</a><br/>
				&nbsp;<span style="font-weight: bold;">알림 </span><span id="notice">방명록과 개발일기 만들었습니다. 개발일기는 매일 업데이트됩니다(아마도...)</span> 
				<div id="headMenu">
					<a href="/dev3">Home</a>
					<a href="/diary" rel="tooltip" data-original-title="일기는 훔쳐보는 맛!">개발일기</a>
					<a href="/dev3/visit_rec/1" rel="tooltip" data-placement="bottom" data-original-title="이미 당신은 방명록을 남기고 있다...">방명록</a>
					<?php
						if(!isset($_SESSION)){ 	
							session_start();
						}
						if(isset($_SESSION['is_login'])){
    						if($_SESSION['is_login']){
   								echo '<a href="/dev3/logout" data-toggle="modal">관리자OUT</a>';
							}
    					}else{
    						echo '<a href="#loginModal" data-toggle="modal">관리자IN</a>';}
					?>
				</div>
			</div>
			<div class="navbar navbar-inverse">
    			<div class="navbar-inner">
    				<a class="brand" href="#" rel="tooltip" data-original-title="퐌타스틱 어드벤춰!">Adventure to</a>
    				<ul class="nav">
    					<li class="dropdown">
    						<a href="#" class="dropdown-toggle" data-toggle="dropdown" rel="tooltip" data-original-title="짹짹" data-placement="top">Twitter</a>
    						<ul class="dropdown-menu">
    							<li><a href="/twitter/timeline" rel="tooltip" id="tw" data-placement="right">timeline</a>
    							</li>
 								<li><a href="/twitter/hotontwit">hot on twit</a></li>
    						</ul>
    					</li>
    					<li>
    						<a href="#" class="dropdown-toggle" data-toggle="dropdown" rel="tooltip" data-original-title="얼굴책">Facebook</a>
    					</li>
    					<li class="dropdown">
    						<a href="#" class="dropdown-toggle" data-toggle="dropdown" rel="tooltip" data-original-title="Dinamic!!" data-placement="top">ProcessingJS</a>
    						<ul class="dropdown-menu">
    							<li>
    								<a href="/processingjs/examples/1" rel="tooltip" id="tw" data-placement="right">examples1</a>
    							</li>
    							<li>
    								<a href="/processingjs/examples/2" rel="tooltip" id="tw" data-placement="right">examples2</a>
    							</li>
    							<li>
    								<a href="/processingjs/examples/3" rel="tooltip" id="tw" data-placement="right">examples3</a>
    							</li>
 								<li><a href="/processingjs/exercise1">exercise1</a></li>
    						</ul>
    					</li>
    					<li><a href="#">Link</a></li>
    					<li><a href="#">Link</a></li>
					 	<form class="navbar-form pull-left" action="">
							<input type="text" class="">
							<a href="#" rel="tooltip" id="naverSchBtn" data-original-title="아직 안됐음. 트위터화면에서 누르면 에러가 하얀 눈처럼..." data-placement="top">
								<button type="" class="btn">네이놈 검색</button>
							</a>
						</form>
    				</ul>
    			</div>
    			<div id="loginModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-header">
    					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    					<h3 id="myModalLabel">관리자</h3>
    				</div>
    				<div class="modal-body">
    						<div id="loginForm">
							<form action="/dev3/login" method="post">
								<table>
									<tr><td>ID</td><td><input class="span5" type="text" name="id"/></td></tr>
									<tr><td>PW</td><td><input class="span5" type="password" name="pw"/></td></tr>
								</table>
								<button class="btn">로긴</button>
							</form>
							</div>
    				</div>
    				<div class="modal-footer">
    					<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    				</div>
    		</div>
			<div class="row-fluid" id="contents">
				<div class="span3" id="sideMenu">
					<div id="develop">
						<a href="jquery_ex.jsp"></a>
					</div>	
				</div>
			
			

