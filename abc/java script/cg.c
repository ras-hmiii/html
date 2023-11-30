from turtle import Turtle, Screen 
def dda_line(x1, y1, x2, y2): 
 dx = x2 - x1 
 dy = y2 - y1 
  
 steps = abs(dx) if abs(dx) > abs(dy) else abs(dy) 
  
 x_increment = dx / steps 
 y_increment = dy / steps 
  
 x = x1 
 y = y1 
  
 for _ in range(steps): 
 t.hideturtle() 
 t.pendown() 
 t.goto(round(x), round(y)) 
 x += x_increment 
 y += y_increment 
 t.penup()
screen = Screen() 
screen.setup(width=200, height=160) 
screen.title("Rashmi K.C.") 
t = Turtle() 
t.speed(1) 
x1, y1 = -40, -15 
x2, y2 = 35, 30 
t.penup() 
t.goto(x1, y1) 
dda_line(x1, y1, x2, y2) 
screen.exitonclick()
