<?php
$id_mysql = mysqli_connect("localhost","root","","dbajax");
$kata = $_POST['q'];
$query = "select nama from negara where nama like '$kata%' limit 10";
$data = mysqli_query($id_mysql,$query) or die ("gagal".mysqli_error());
while($k=mysqli_fetch_array($data)){
    echo '<li onClick="isi(\''.$k[0].'\');"
    style="cursor:pointer">'.$k[0].'</li>';
}
?>