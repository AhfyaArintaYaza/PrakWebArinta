<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
 
<head> 
  <title>Study Kasus2</title> 
</head> 
 
<body>  
  <form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 
    Pesanan : 
    <br>
    <input type="checkbox" name="pes[]" value="paket1" 
	<?php
	if (isset($_POST['pes'])) {
		foreach ($_POST['pes'] as $key => $value) { 
    		if ($value=="paket1"){
				echo "checked";
			}
  		}
	}
     ?>
    />Soft Drink + Ayam Bakar 
    <br>
 	
    
    <input type="checkbox" name="pes[]" value="paket2" 
    <?php
	if (isset($_POST['pes'])) {
		foreach ($_POST['pes'] as $key => $value) { 
    		if ($value=="paket2"){
				echo "checked";
			}
  		}
	}
     ?>
    />Soft Drink + Nasi Goreng 
 	<br>
    
    
    <input type="checkbox" name="pes[]" value="paket3" 
    <?php
	if (isset($_POST['pes'])) {
		foreach ($_POST['pes'] as $key => $value) { 
    		if ($value=="paket3"){
				echo "checked";
			}
  		}
	}
     ?>
    />Es Teh + Rawon <br /> 
 	<br>
    <input type="submit" value="Pilih" /> 
  </form> 
 
<?php 
// Ekstraksi nilai 
if (isset($_POST['pes'])) { 
  foreach ($_POST['pes'] as $key => $value) { 
    echo $value . '<br />'; 
  } 
} 
?> 
 
</body> 
</html> 