<head> 
  <title>Daftar Prodi di Jurusan Teknik Elektro</title> 
</head> 
 
<body> 
 
  <form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 
    Program Study : 
    <select name="program"> 
     <?php
	  if (isset($_POST['program'])) { 
  		echo "<option value='".$_POST['program']."' selected>".$_POST['program'].""; 
	} 
	  ?>
      <option value="">------
      <option value="S1PTI">S1PTI 
      <option value="S1PTE">S1PTE 
      <option value="D3ELKA">D3ELKA
      <option value="D3ELTRO">D3ELTRO
      <option value="S1PTB">S1PTB
      <option value="S1PTO">S1PTO 
      <option value="S1PTM">S1PTM
    </select> <br /> 
 
    <input type="submit" value="Pilih" /> 
  </form> 
 
<?php 
if (isset($_POST['program'])) { 
  echo $_POST['program']; 
} 
?> 
</body>
</html>