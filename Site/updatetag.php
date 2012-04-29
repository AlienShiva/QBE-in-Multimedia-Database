<?php

mysql_connect("localhost", "root", "") OR DIE (mysql_error());

mysql_select_db ("mdb") OR DIE ("Unable to select db".mysql_error());

$id=abs($_GET['id']);
$tags1=($_GET['tags2']);

$query = mysql_query("delete FROM tagmap WHERE imageid=$id");
echo $tags1;
$query = mysql_query("update imagedb set tags='$tags1' where imageid=$id");

$all=explode(",",$tags1);

foreach($all as $e)
{
	$sql = "INSERT INTO tagmap (imageid,tag ) VALUES ('{$id}','{$e}')";
	if(!mysql_query($sql)) {
		echo 'error inserting tagmap';
	}
}
 echo '<a href="showall.php" align="left">showall</a>';
?>