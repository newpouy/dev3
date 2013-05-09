		var value;
		
		$('#btn').click(function(){
			$('#result').html('');
			$.ajax({
				url 		: 'http://localhost/processingjs/ajax',
				datatype 	: 'json',
				type 		: 'POST',
				data		: {'value' : $('#value').val()},
				success 	: function(result){
					value=JSON.parse(result).value;
						$('#result').html(result);
				} 
							
			})
		});
	// Simple way to attach js code to the canvas is by using a function
		function sketchProc(pro) {
		  // Override draw function, by default it will be called 60 times per second
		 
		  pro.setup = function() {
			 pro.size(200,200);
			 pro.noStroke();
			 pro.colorMode(pro.RGB, 255, 255, 255, 100);
			 pro.rectMode(pro.CENTER);
		  };
		 
		  pro.draw = function() {
		  	
		  	pro.background(51); 
		  	pro.fill(value);
		 	pro.rect(pro.mouseX, pro.height/2, pro.mouseY/2+10, pro.mouseY/2+10);
		  	pro.fill(255, value);
		  	pro.rect(pro.width-pro.mouseX, pro.height/2, ((pro.height-pro.mouseY)/2)+10, ((pro.height-pro.mouseY)/2)+10);
		  };
		  
		}
		
		var canvas = document.getElementById("canvas2");
		// attaching the sketchProc function to the canvas
		var p = new Processing(canvas, sketchProc);
		// p.exit(); to detach it
		
