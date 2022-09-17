

<?php
session_start();

$email=$_SESSION['email'];
isset($_SESSION['email'])or die (header("localhost:file1.php"));
$connect=mysqli_connect("localhost","root","","test");

$select=mysqli_query($connect,"select * from register where email='$email'");
	$num=mysqli_num_rows($select);
	for($i=0; $i<$num; $i++){
$row=mysqli_fetch_array($select);

echo"<h1>".'Welcome to your id '.$row[1]."</h1>";

	}	
	?>

<form method="post" action="file1.php">
<table border="2">
<tr>
<th>: </th>
<td><input type="submit" name="btn_log" value="LOGOUT"></td>
</tr>

</table>

</form>
<?php
if(isset($_POST['btn_log'])){
session_destroy();
echo"<script>alert('logout sucessfully');</script>";
echo"<script>window.location.assign('myfile.php');</scrip>";	
	
	
}


?>