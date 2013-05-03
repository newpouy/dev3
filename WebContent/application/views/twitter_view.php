				<div class="span6" id="eachContent">
					<div>
						<script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
	 
						<a href="https://twitter.com/intent/tweet?url=http://54.225.101.87/">트위터로 링크공유</a>
						<a href="https://twitter.com/share" class="twitter-share-button" data-count="vertical" data-via="newpouy">Tweet</a>
						<a href="https://twitter.com/newpouy" class="twitter-follow-button" data-show-count="false">Follow @newpouy</a>	
					</div>
					<?php
					foreach ($timeline as $key => $each_line) {
						//echo '<img src="'.$each_line->user->profile_image_url.'">'.$each_line->user->name.'<br>';
						//echo $each_line->text.'<br>';
						print_r($each_line);
					}
					?>
				</div>
	