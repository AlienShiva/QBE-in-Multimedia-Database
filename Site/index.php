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









</td>
</tr>
</table>
<hr color="#DDDDDD"/ width="800"/>
</td>
</tr>
</table>
</body>

</html>