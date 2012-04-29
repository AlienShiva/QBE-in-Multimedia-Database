<?php

mysql_connect("localhost", "root", "") OR DIE (mysql_error());

mysql_select_db ("mdb") OR DIE ("Unable to select db".mysql_error());

$id=abs($_GET['id']);

$query = mysql_query("SELECT image FROM imagedb WHERE imageid=$id");
$data=mysql_fetch_array($query);

header('Content-type: image/jpg');
echo $data['image'];
?>