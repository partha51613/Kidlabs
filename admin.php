<html>
<head><title>ADMIN Login Panel</title></head>
 <script src="index.js"></script>
 <link rel="stylesheet" href="admin.css">
 <body>
 <br><br><br><br><br><br><br><br><center>
 <form action="adminlogin.php" method="post" class="form-container">
	<center><h1 style="color:red">KIDLABS</h1></center>
	<hr>

	<label><b>Email:&nbsp&nbsp&nbsp</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>
	<br><br>

	<label><b>Password:</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
	<br><br>
	<button type="submit" class="btn">LOGIN</button>
	<a href="index.php"><button type="button" class="btn cancel">CANCEL</button></a>
	</form>
	</body>
	</html>