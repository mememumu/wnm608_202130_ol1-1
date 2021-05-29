<?php
session_start();
include 'config.php';

$admin_name=$_POST['admin_name'];
$admin_pass=$_POST['admin_pass'];
$q="select admin_id,admin_pass from admin where (admin_name='$admin_name' and admin_pass='$admin_pass')";
$run=mysqli_query($conn,$q);
$c=mysqli_num_rows($run);
if($run)
{
    $row=mysqli_fetch_array($run);
    echo "<p align='center'><img src=pics\loader.gif width=60% height=50%></p>";
    echo "<div class=container><p align=center><font face=castellar size=8>LOGIN successfull<br>redirecting to admin home!!!!!!</font></p</div>";
    header('Refresh: 2 URL= "admin.php"');
    $_SESSION['aid']=$row['admin_id'];
}
else{
        echo "<h2><b>INCORRECT EMAIL OR PASSWORD</b></h2>";
        header('Refresh:2 url="index.php"');
    }
?>