<script type="text/javascript">
	$(function(){
		$('button#addTag').bind('click',function(){
			$(this).after('<br/><input type="text" name="tag[]">');
		})
	});
</script>

				<div class="span9" id="eachContent">
					<span style="font-size: 20px;">다이어리</span><span style="font-size: 10px;">게시판버전</span><br/>
						<script src="/common/ckeditor/ckeditor.js"></script>
						<form name="frm" action="/diary/insert" method="post">
						<textarea name="content"></textarea>
						Tags<br/> 
						<input type="text" name="tag[]"/>
						<button id="addTag" type="button"clas="btn" alt="태그추가">+</button>
						<script>
							CKEDITOR.replace('content');
						</script>
						<br/>
					<div align="center"><button type="submit" class="btn">쓰기</button></div>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>
</html>