<script type="text/javascript">
	function goModal(modalID){
		alert(modalID);
		
	}
	function goModify(diaryID){	
		var obj=document.frm;
		obj.action="/diary/modify/"+diaryID;
		obj.submit();
	}
	function goWrite(){
		var obj=document.frm;
		obj.action="/diary/write";
		obj.submit();
	}
</script>
<form name="frm" method="post">
				<div class="span9" id="eachContent">
					<span style="font-size: 20px;">다이어리</span><span style="font-size: 10px;">게시판버전</span>
					<div align="right"><button class="btn" onclick="goWrite()">쓰기</button></div>
					<table class='table table-hover'>
						<thead>
							<tr>
								<td>날짜</td><td>Tags - 주제별 검색(구현예정)</td>
							</tr>
						</thead>
						<tbody>
							<?php
							//나중에 개선을 생각해볼 로직. 
							foreach ($list as $key => $value) {
									echo '
									<tr onclick="goModal(#myModal'.$value['diaryID'].')">
										<td>
										<a href="#myModal'.$value['diaryID'].'" data-toggle="modal">'
										.$value['regDate'].'</a></td>
										<td>';
											foreach ($tag_list as $key2 => $value2) {
												if($value['diaryID']==$value2['diaryID']){		
													echo $value2['tagName'].' ';
												}
											}
									echo '
										</td>
									</tr>
									';
									
							}
							?>
						</tbody>
					</table>
<!-- Modal -->
<?php
foreach ($list as $key => $value) {
	echo '
		<div id="myModal'.$value['diaryID'].'" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    	<div class="modal-header">
	    		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    		<h3 id="myModalLabel">'.$value['regDate'].'	</h3>
	    	</div>
	    	<div class="modal-body">
	   			<p>'.$value['content'].'</p>
	    	</div>
	    	<div class="modal-footer">
	    		<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	    		';
			if(isset($_SESSION['id'])){
				if($_SESSION['id']=='newpouy'){
				echo '
	   			<button class="btn btn-primary" onclick="goModify('.$value['diaryID'].')">Modify</button>
	   			';
			}}
			echo '
	    	</div>
	    </div>
	';
}
?>
			</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>