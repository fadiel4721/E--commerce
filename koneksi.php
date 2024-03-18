<?php
$koneksi = @mysqli_connect('localhost','root','','projeklibur');

if(!$koneksi){
    die("mysqli_error: ".mysqli_connect_error());
}else{
    // echo "Koneski Berhasil";
}
?>