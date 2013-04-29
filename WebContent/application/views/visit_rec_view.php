
<script type="text/javascript">
$(function() {
	$('input#userID').val("쩌리짱")
				.css('color','#F00')
	$('input#userID').bind('focus',function(event){
		$(event.target).val("")
						.css('color','#000')
	})
	//input 엘리먼트가 포커스를 잃었을 때 value속성값이 없다면 
	//아이디를 입력하세요란 메세지 출력
	$('input#userID').blur(function(event) {
		if($(event.target).val()==""){
			$('input#userID').val("당신은 쩌리짱?")
					.css('color','#F00')
		}
	})
});
	

		function goInsert(){
			var obj=document.frm;
			frm.action="/dev3/visit_rec_insert";
			obj.submit();
		}
		function goDel($recID){
			alert($recID+'비번비번~~');
			var obj=document.frm;
			frm.action='/dev3/visit_rec_delete/'+$recID;
			obj.submit();
		}
</script>

			
			<div class="span9" id="eachContent">
				<div id="write_visitRec">
					<form name="frm" method="POST">
					<h3>방명록</h3>
					누가: <input id="userID" style="height: 20px;" type="text" name="userID"/><br/>
					고칠때: <input type="text" name="userPW" value="1111"/><br/>
					온김에: <textarea name="msg"></textarea><br/>
					<button class="btn-success" onclick="goInsert()">발ㅈㅏ국</button>
					</form>
				</div>
				<div id="list_visitRec">
				<?php
				foreach ($data as $key => $value) {
					foreach ($value as $column => $value2) {
						echo $value2.'<br/>';
					}
					echo '<button onclick="javascript:goDel('.$value['recID'].')">X</button></a><br/><br/><br/>';
				}
				?>
				<?php echo $page_link;?>
					
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
