<h1> Hasil session </h1>
<?php
    session_start();
    echo $_SESSION['Nama Lengkap'];
    echo "<br>";
    echo $_SESSION['NIM'];
    echo "<br>";
    echo $_SESSION['Jenis Kelamin'];
    echo "<br>";
    
?>