<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 4.0 Transitional//EN"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>GREETING</title>
</head>
<body>
<?php 
function greeting() 
{ 
$date = date ("H:i"); 
if ($date>=0 and $date <10) { 
echo '<h1>Sugeng Enjing :) </h1>'; 
} else if ($date>=10 and $date<15) { 
echo '<h1>Sugeng Siang</h1>'; 
} else if ($date>=15 and $date<18) { 
echo '<h1>Sugeng Sonten</h1>'; 
} else if ($date>=18 and $date<24) { 
echo "Sugeng Dalu"; 
}else echo ""; 
} 
?>
<?php greeting(); ?><br>

<p align="center"><font face="arial" size="5" color="red">
</body>
</html>
