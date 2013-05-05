<div class="span6" id="eachContent">
<script type="text/javascript" src="/common/processing-1.4.1.js"></script>
	<div style="float: left; margin: 10px;">
		<script type="application/processing" data-processing-target="canvas1">
		void setup() 
		{
		  size(200, 200); 
		  noStroke();
		  colorMode(RGB, 255, 255, 255, 100);
		  rectMode(CENTER);
		}
		void draw() 
		{   
		  background(51); 
		  fill(255, 80);
		  rect(mouseX, height/2, mouseY/2+10, mouseY/2+10);
		  fill(255, 80);
		  rect(width-mouseX, height/2, ((height-mouseY)/2)+10, ((height-mouseY)/2)+10);
		}
		</script>
		<canvas id="canvas1"></canvas><br/>
		canvas1
	</div>
	<div style="float: left; margin: 10px;">
		
		<script type="application/processing" data-processing-target="canvas2">
		// Global variables
		float radius = 50.0;
		int X, Y;
		int nX, nY;
		int delay = 16;
		// Setup the Processing Canvas
		void setup(){
		  size( 200, 200 );
		  strokeWeight( 10 );
		  frameRate( 15 );
		  X = width / 2;
		  Y = height / 2;
		  nX = X;
		  nY = Y;  
		}
		// Main draw loop
		void draw(){
		  
		  radius = radius + sin( frameCount / 4 );
		  
		  // Track circle to new destination
		  X+=(nX-X)/delay;
		  Y+=(nY-Y)/delay;
		  
		  // Fill canvas grey
		  background( 100 );
		  
		  // Set fill-color to blue
		  fill( 0, 121, 184 );
		  
		  // Set stroke-color white
		  stroke(255); 
		  
		  // Draw circle
		  ellipse( X, Y, radius, radius );                  
		}
		// Set circle's next destination
		void mouseMoved(){
		  nX = mouseX;
		  nY = mouseY;  
		}
		</script>
		<canvas id="canvas2"></canvas>
		<br/>canvas2
	</div>
	<div style="float: left; margin: 10px;">
		<canvas id="canvas3" width="200px;" height="200px;"></canvas>
		<script id="script1" type="text/javascript">
		// Simple way to attach js code to the canvas is by using a function
		function sketchProc(processing) {
		  // Override draw function, by default it will be called 60 times per second
		  processing.draw = function() {
		    // determine center and max clock arm length
		    var centerX = processing.width / 2, centerY = processing.height / 2;
		    var maxArmLength = Math.min(centerX, centerY);
		
		    function drawArm(position, lengthScale, weight) {      
		      processing.strokeWeight(weight);
		      processing.line(centerX, centerY, 
		        centerX + Math.sin(position * 2 * Math.PI) * lengthScale * maxArmLength,
		        centerY - Math.cos(position * 2 * Math.PI) * lengthScale * maxArmLength);
		    }
		
		    // erase background
		    processing.background(224);
		
		    var now = new Date();
		
		    // Moving hours arm by small increments
		    var hoursPosition = (now.getHours() % 12 + now.getMinutes() / 60) / 12;
		    drawArm(hoursPosition, 0.5, 5);
		
		    // Moving minutes arm by small increments
		    var minutesPosition = (now.getMinutes() + now.getSeconds() / 60) / 60;
		    drawArm(minutesPosition, 0.80, 3);
		
		    // Moving hour arm by second increments
		    var secondsPosition = now.getSeconds() / 60;
		    drawArm(secondsPosition, 0.90, 1);
		  };
		  
		}
		
		var canvas = document.getElementById("canvas3");
		// attaching the sketchProc function to the canvas
		var p = new Processing(canvas, sketchProc);
		// p.exit(); to detach it
		</script>
		<br/>canvas3
	</div>
	<div style="float: left; margin: 10px;">
		<canvas id="canvas4"></canvas>
		<script type="application/processing" data-processing-target="canvas4">
			// All Examples Written by Casey Reas and Ben Fry
			// unless otherwise stated.
			int num = 60;
			float mx[] = new float[num];
			float my[] = new float[num];
			
			void setup() 
			{
			  size(200, 200);
			  smooth();
			  noStroke();
			  fill(255, 153); 
			}
			void draw() 
			{
			  background(51); 
			  // Reads throught the entire array
			  // and shifts the values to the left
			  for(int i=1; i<num; i++) {
			    mx[i-1] = mx[i];
			    my[i-1] = my[i];
			  } 
			  // Add the new values to the end of the array
			  mx[num-1] = mouseX;
			  my[num-1] = mouseY;
			
			  for(int i=0; i<num; i++) {
			    ellipse(mx[i], my[i], i/2, i/2);
			  }
			}
		</script>
		<br/>canvas4
	</div>
	<div style="float: left; margin: 10px;">
		<canvas id="canvas5" datasrc="/processing/make_won_01.pde"></canvas>
		<br/>canvas5
	</div>
	<div style="float: left; margin: 10px;">
		<canvas id="canvas6" datasrc="/processing/snake.pde"></canvas>
		<br/>canvas6
	</div>
</div>