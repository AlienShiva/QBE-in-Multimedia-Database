<?php

	mysql_connect("localhost", "root", "") OR DIE (mysql_error());

	mysql_select_db ("mdb") OR DIE ("Unable to select db".mysql_error());

	$id=abs($_GET['id']);

	$query = mysql_query("delete FROM imagedb WHERE imageid=$id");
	$query = mysql_query("delete FROM tagmap WHERE imageid=$id");

	echo '<meta http-equiv="refresh" content="0;URL=showall.php" / >'
?>