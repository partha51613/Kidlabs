<?php

include("connection.php");
$c=0;
if (empty(ltrim(rtrim($_POST['name']))))
{  echo 'Name Required<br>'; header("refresh:2;url=index.php" ); }
else {   $name=$_POST['name'];  $c=$c+1; }

if (empty(ltrim(rtrim($_POST["contact"]))))
	{  echo 'Contact Required<br>'; header("refresh:2;url=index.php" ); }
else {   $cont=$_POST['contact']; $c=$c+1;}

if (empty(ltrim(rtrim($_POST["email"]))))
	{  echo 'Email Required<br>'; header("refresh:2;url=index.php" ); }
else {   $email=$_POST['email']; $c=$c+1;}

if (empty(ltrim(rtrim($_POST["password"]))))
	{  echo 'Password Required<br>'; header("refresh:2;url=index.php" ); }
else {   $pass=$_POST['password']; $c=$c+1;}

if (empty(ltrim(rtrim($_POST["password1"]))))
	{  echo 'Password Confirmation Required<br>'; header("refresh:2;url=index.php" ); }
else {
		$pass1=$_POST['password1']; if($pass1!=$pass){die('Password Doesnot match'.header("refresh:2;url=index.php" ));} else{ $c=$c+1; }
	}
	$bd=$_POST['bday'];
if($c==5)
{
$q="INSERT INTO registration (Name,BirthDate,Contact,email,password) VALUES ('$name', '$bd', '$cont', '$email', '$pass');";
$in=mysqli_query($conn,$q);
	if(!$in)
		{ die('Insert Error'.mysqli_error($conn).header("refresh:2;url=index.php" )); }
	else
		{ echo 'Registered Successfully'; }
		header("refresh:2;url=index.php" );
}
else { echo 'Something went wrong';
		header('refresh:2;url=index.php');
	}
?>
