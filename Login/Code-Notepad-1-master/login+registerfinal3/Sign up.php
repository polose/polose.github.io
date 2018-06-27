<!DOCTYPE html>
<html>
  <head>
    <title>Attendance Manager Sign Up</title>
    <link rel="stylesheet" type="text/css" href="signupstyle.css">
  </head>
<body>
  <div id="container">
  <div id="frm">
      
    <form action="process2.php" method="post">
     
        <input type="text" name="Name" placeholder="Full Name" id="name"/>
      
      
        <input type="text" name="RollNo" placeholder="Roll No." id="rno"/>
      
      
        <input type="email" name="email" placeholder="E-Mail Id" id="mailId"/>
      
      
        <input type="text" name="department" placeholder="Department" id="dept"/>
        
        <input type="Password" name="pass" placeholder="Password" id="pass"/>   

        <input type="Password" name="confirmpass" placeholder="Confirm Password" id="cpass"/>     
        
        <input type="submit" name="submit" value="Register" id="btn"/><br>
     
  </form>
  </div>
  </div>
</body>
</html>