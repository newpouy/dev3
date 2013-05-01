
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

</style>

<script src="http://code.jquery.com/jquery.js"></script>
<script src="/common/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript">
$(function(){
	
	$('span#notcie').
});
</script>

</head>
<body>
	<div class="">
		<div class="row-fluid">
			<div class="span12" id="headLine">
				<a href="/" style="color: #222"><h1>Develop-ing Diary</h1></a><br/>
				&nbsp;<span style="font-weight: bold;">알림 </span><span id="notice">방명록과 개발일기 만들었습니다. 개발일기는 매일 업데이트됩니다(아마도...)</span> 
				<div id="headMenu">
					<a href="/dev3">Home</a>
					<a href="/diary">개발일기</a>
					<a href="/dev3/visit_rec/1">방명록</a>
					<?php 
	    					session_start();
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
    				<a class="brand" href="#">Adventure</a>
    				<ul class="nav">
    					<li class="dropdown">
    						<a href="#" class="dropdown-toggle" data-toggle="dropdown">TWITTER</a>
    						<ul class="dropdown-menu">
    							<li><a href="">gfs</a></li>
 								<li><a href="">fda		</a></li>
    						</ul>
    					</li>
    					<li><a href="#">Link</a></li>
    					<li><a href="#">Link</a></li>
    					<li><a href="#">Link</a></li>
    					<li><a href="#">Link</a></li>
					    <form class="navbar-form pull-left">
							<input type="text" class="">
							<button type="submit" class="btn">Submit</button>
						</form>
    				</ul>
    			</div>
    		</div>
			<div class="row-fluid" id="contents">
				<div class="span3" id="sideMenu">
					<div id="loginModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-header">
	    					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    					<h3 id="myModalLabel">관리자</h3>
	    				</div>
	    				<div class="modal-body">
	    				
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
	    				
	    				</div>
	    				<div class="modal-footer">
	    					<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	    				</div>
					<div id="develop">
						<a href="jquery_ex.jsp">-jQuery</a>
					</div>	
				</div>
			</div>