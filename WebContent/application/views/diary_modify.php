<script type="text/javascript">
	$(function(){
		$('button#addTag').bind('click',function(){
			$(this).after('<br/><input type="text" name="tag[]">');
		})
	});
	function goModifyEx(diaryID){
		var obj=document.frm;
		obj.action="/diary/modifyEx/"+diaryID;
		obj.submit();
	}
</script>

				<div class="span9" id="eachContent">
					<span style="font-size: 20px;">다이어리</span><span style="font-size: 10px;">게시판버전</span><br/>
						<script src="/common/ckeditor/ckeditor.js"></script>
						<form name="frm" method="post">
						<textarea name="content"><?php echo $oneDiary[0]['content'];?></textarea>
						Tags<br/> 
						<input type="text" name="tag[]"/>
						<button id="addTag" type="button"clas="btn" alt="태그추가">+</button>
						<script>
							CKEDITOR.replace('content');
						</script>
						<br/>
					<div align="center"><button class="btn" onclick="goModifyEx(<?php echo $oneDiary[0]['diaryID']?>)">쓰기</button></div>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>
</html>