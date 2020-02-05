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

?>