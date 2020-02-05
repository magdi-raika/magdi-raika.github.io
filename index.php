<!DOCTYPE html>
<html>
<head>
	<title>oppp</title>
</head>
<body>



<center>
	<table border="1" cellpadding="3">
		<form method="POST" action="index.php">
			<tr><td>numero:</td><td><input type="text" name="1" value=""></td></tr>
			<tr><td><select name="signe" size="4">
			<option value="+" selected>+</option>
			<option value="-">-</option>
			<option value="*" >*</option>
			<option value="/" >/</option>
			
			</select></tr></td>
			<tr><td>numero:</td><td><input type="text" name="2" value=""></td></tr>
			<tr><td><input type="submit" name="al" value="aller"></td></tr>
		</form>
	</table>


</center>


<?php 

if(!empty($_POST['1'])&&!empty($_POST['2'])){
?>
<h1>kabch, le resultat est :  
<?php 
$n1=$_POST['1'];
	$n2=$_POST['2'];
	

$op=$_POST['signe'];
if ($op=='+') {
	echo $n1+$n2;
}
elseif ($op=='-') {
	echo $n1-$n2;
}
elseif ($op=='*') {
	echo $n1*$n2;
}
else{
	echo $n1/$n2;
}
}

?>
</h1>
</body>
</html>
