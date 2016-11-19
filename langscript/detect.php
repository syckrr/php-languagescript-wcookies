<?php
$dil= $_GET["tr"];
if($dil=="TR"){
	setcookie("tr", "1", time() + (60*60*24*30));
}
else //English here!
{
	setcookie("tr", "0", time() + (60*60*24*30));
}
header("Location:index.php"); //Redirect to indx or you can redirect last page with using cookies!
?>