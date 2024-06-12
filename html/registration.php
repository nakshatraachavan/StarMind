<html>
<head>
<title>Registration</title>

</head>
<body>
<div class="main">

 <form method="post" action="welcome.php">

 <h2>Student Registration</h2>
 <b><label for="fname">First Name</label><br></b>
  <input type="text" name="fname" placeholder="First Name"><br><br>
  <b><label for="lname">Last Name</label><br></b>
  <input type="text" name="lname" placeholder="Last Name"><br><br>
  <b><label for="email">Email</label><br></b>
  <input type="email" name="email" placeholder="Email"><br><br>
  <b><label for="mobile">Mobile</label><br></b>
  <input type="text" name="mobile" placeholder="Mobile"><br><br>
<hr>
  Gender<br>
  <input type="radio" name="gender" value="Male">Male<br>
  <input type="radio" name="gender" value="female">Female<br>
<hr>
  Hobbies<br>
  <input type="checkbox" name="hobby[]" value="Cricket">Cricket<br>
  <input type="checkbox" name="hobby[]" value="Football">Football<br>
  <input type="checkbox" name="hobby[ ]" value="Chess">Chess<br>
<hr>
  <input type="submit" name="submit" value="Register">
 </form>
</div>
</body>
</html>