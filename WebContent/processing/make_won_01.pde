int xpos = 0;

void setup()
{
  size(300, 300);
  noStroke();
  smooth();
}

void draw()
{
  background(0);
  ellipse(xpos, height/2, 30, 30);
  xpos++;
  if(xpos > width + 15)
  {
    xpos = -15;
  }
}
