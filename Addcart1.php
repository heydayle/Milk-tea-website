<?php
session_start();
$id=$_GET['item1'];
if(isset($_SESSION['cart'][$id]))
{
	$qty = $_SESSION['cart'][$id] + 1;
}
else
{
	$qty=1;
}
$_SESSION['cart'][$id]=$qty;
header("location:Milktea.php");
exit();
?>