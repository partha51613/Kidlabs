<html>
<head>
<title>Homepage</title>
 <script src="index.js"></script>
 <link rel="stylesheet" href="index.css">
</head>
<body><a href="admin.php"><h4 style="text-align: right">ADMIN</h4></a>
	<br><br><br><br><br><br><br><center>
	  <p>WELCOME TO KIDLABS</p><br><br>
	  <button class="pop-button" onclick="rpop()">REGISTRATION</button>
	  <button class="pop-button" onclick="lpop()">LOGIN</button>
</center>
  <div class="form-popup" id="register">
  <form name="form" action="registration.php"  onsubmit="return abc()" method="POST" class="form-container">
    <h1>REGISTRATION</h1>
    <h3>Please fill in this form to create an account.</h3>
    <hr>
	<b>Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="text" placeholder="Enter Your Name" name="name" pattern="[A-Za-z ]{1,20}" title='Only Alphabets Are Allowed' onkeyup="val(event)" required><br>

	Contact No.:&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="text" name="contact" placeholder="Enter Your Phone No."pattern="[0-9]{10,11}" title='Enter Valid Contact No.'required><br>

	Date Of Birth:&nbsp&nbsp&nbsp
    <input type="date" name="bday" max="2018-12-31" min="1990-01-01" required><br>

	Email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="email" placeholder="Enter Email" name="email" onkeyup="mail(event)" required><br>

  Password:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="password" placeholder="Enter Password" name="password" minlength="6" pattern="(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{6,10}"
	title="Must contain at least one number and one uppercase and lowercase letter, and of min-6 & max-10 characters" required onkeyup="pass()"><br>

    Confirm Password:
    <input type="password" placeholder="Repeat Password" name="password1" required onkeyup="cp()" >
	</b>

     <center> <input type="checkbox" onclick="Show()"> Show Password<br>
    <h4>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy.</a></center></h4>

      <button type="submit" class="btn" id="submit">REGISTER</button>
	  <button type="button" class="btn cancel" onclick="rclose()">CANCEL</button>
	</form>
</div>

 <div class="form-popup1" id="login">
 <form action="login.php" method="post" class="form-container">
	<center><h1 style="color:red">KIDLABS</h1></center>
	<hr>

	<label><b>Email:&nbsp&nbsp&nbsp</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>
	<br><br>

	<label><b>Password:</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
	<br><br>
	<button type="submit" class="btn">SUBMIT</button>
	<button type="button" class="btn cancel" onclick="lclose()">CANCEL</button>
	</form>
 </div>
</body>
</html>
