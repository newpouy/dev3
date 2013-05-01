				<div class="span6" id="eachContent">
					<?php
					foreach ($timeline as $key => $each_line) {
						echo '<img src="'.$each_line->user->profile_image_url.'">'.$each_line->user->name.'<br>';
						echo $each_line->text.'<br>';
						
					}
					?>
				</div>
	