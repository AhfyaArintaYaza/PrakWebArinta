<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
        <title>Modul 3 | Latihan 1</title>
</head>
<body>
        <?php
         
                // Men-set nilai cookie 
                setcookie('nama_cookie', 'nilai_cookie'); 
         
                // Mendapatkan nilai cookie 
                echo $_COOKIE['nama_cookie']; 
         
        ?> 
         
        <p>Tekan Refresh (F5)</p>
</body>
</html>