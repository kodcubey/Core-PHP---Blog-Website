<?php include("admheader.php") ?>

<?php
if(isset($_GET["a"]))
{
	include("adminsayfa/".$_GET["a"].".php");
}
?>
<?php include("admfooter.php") ?>