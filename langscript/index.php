<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

<?php
error_reporting(0); 
if(isset($_COOKIE["tr"])) {
	if ($_COOKIE["tr"]==1){
		include "tr.php";
	}
	else
	{
		include "eng.php";
	}
}
else
{
	echo'
   <center><br>Dil sec - Please select a language<br><br>
   <form name="form1" method="get" action="detect.php?tr="> 
<input type="submit" name="tr" value="TR" id="tr" /> 
<input type="submit" value="ENG" name="tr" id="eng"></center>
</form>  
';
}
?>

<title>Language SCRIPT!</title>

<body bgcolor="grey" >
<center>
<img width="300" height="300" src="logo.jpg"><br>
<br><br><br><br>
<?php echo'<form name="form1" method="get" action="detect.php?tr="> 
<input type="submit" name="tr" value="TR" id="tr" /> 
<input type="submit" value="ENG" name="tr" id="eng">
</form>  
';?>
<br>
<?php print $a1 . " - " . $c1; ?><br><br>
<b><?php print $a2; ?><br></b>
<?php print $a3; ?>
<br><br><br><br><br><br><br><br><br>
-------------------------------------------------------------------------------------------------
<b><h3><?php echo $b1 . " - " . $c2 .  " - " . $c3; ?></h3></b>

</center>
</body>
</html>