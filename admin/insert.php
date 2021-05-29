<?php
session_start();   
include 'config.php';
$proname=$_POST['pname'];
$color=$_POST['color'];
$pic=$_POST['pic'];
$desc=$_POST['desc'];
$price=$_POST['price'];
$s="insert into flower(pname,colour,pic,descr,price) values('$proname','$color','$pic','$desc',$price)";
$r=mysqli_query($conn,$s);
if($r)
{
    echo "<p align=center><font face=castellar size=8>Submitted Successfully</font></p>";
    echo"<br><br>REDIRECTING TO ADMIN HOME PAGE.......................";
    echo "<img src='pic\load.gif>'";
    header("Refresh:2; url='admin.php'");
}

?>
