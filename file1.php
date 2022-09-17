<html>
<head>
<title> login form with session</title>
</head>

<body>
<form method="post">
<table border="2">
<tr>
<th>Email</th>
<td><input type="email" name="txtemail"></td>
</tr>

<tr>
<th>Password</th>
<td><input type="password" name="txtpass"></td>
</tr>



<tr>
<th> : </th>
<td><input type="submit" name="btn_sub" value="login"></td>
</tr>
</table>
</form>
</body>
</html>
<?php
$connect=mysqli_connect("localhost","root","","test");

if(isset($_POST['btn_sub'])){
$email=$_POST['txtemail'];	
$pass1=$_POST['txtpass'];	
session_start();
$login=mysqli_query($connect,"select * from register where email='$email' and password='$pass'");
if($login){
$_SESSION['email']=$email;
echo"<script>alert('Login sucessfull');</script>";
echo"<script>window.location.assign('mypage.php');</script>";
}
else{
echo"<script>alert('Invalid email and password');</script>";	
}

}

?>