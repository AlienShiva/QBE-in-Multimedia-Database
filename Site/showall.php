<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ImageDB</title>
</head>

<body>
<table width="800" align="center" bgcolor="#CCCCCC">
<tr>
<td width="504">
<a href="index.php"><img src="home.png" width="50" height="50" /></a>
<br />
<br />

<form name="show" action="showall.php">
<input name="showall" type="submit" value="Show All" />
</form>
<br />

<form name="up" action="upload.php">
<input name="upload" type="submit" value="Upload" />
</form>
<br />

<form name="image" action="image.php" method="post" enctype="multipart/form-data">
<input name="simage" type="file" /> <input name="search" type="submit" value="Search by image" />
</form>
<br />

<form name="tag" action="tag.php">
<input name="stag" type="text" width="500"/> <input name="search" type="submit" value="Search by tag" />
</form>

<hr color="#DDDDDD"/ width="800"/>

<table width="800" align="center" bgcolor="#EFF5FA">
<tr>
<td width="504">





<?php

mysql_connect("localhost", "root", "") OR DIE (mysql_error());

mysql_select_db ("mdb") OR DIE ("Unable to select db".mysql_error());
echo '<table>';
$query = mysql_query("SELECT tags,imageid FROM imagedb");
  while($data=mysql_fetch_array($query)) {
	  echo '<tr>';
	  echo '<td>';
  echo '<'.'img height="20%" width="20%" src="showone.php?id='.$data['imageid'].'">';
  echo '</td>';
  echo '<td align="left">';


?>
  <form name="up" action="updatetag.php" method=get>
 <?php
  echo '<br/>Tags <input type="text" name="tags2" value="'.$data['tags'].'"/>';?>
  <input name="update" type="submit" value="Update" />';
  <?php echo '<input name="id" type="hidden" value="'. $data['imageid'] .'" />'; ?>
  </form><?php
   echo '<a href="delete.php?id='.$data['imageid'].'" align="left">Delete</a>';
  echo '</td>';
  echo '</tr>';  
  }
echo '</table>';
?>



</td>
</tr>
</table>
<hr color="#DDDDDD"/ width="800"/>


</td>
</tr>
</table>
</body>

</html>