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

$file_src="temp.jpg";

move_uploaded_file($_FILES['simage']['tmp_name'], $file_src);

mysql_connect("localhost", "root", "") OR DIE (mysql_error());

mysql_select_db ("mdb") OR DIE ("Unable to select db".mysql_error());

$i = imagecreatefromjpeg("temp.jpg");

$rTotal=0;
$gTotal=0;
$bTotal=0;
$total=0;

		for ($x=0;$x<imagesx($i);$x++) 
		{
                for ($y=0;$y<imagesy($i);$y++) 
				{
                        $rgb = imagecolorat($i,$x,$y);

						$r   = ($rgb >> 16) & 0xFF;
                        $g   = ($rgb >>  8)& 0xFF;
                        $b   = $rgb & 0xFF;
                        
						$rTotal += $r;
                        $gTotal += $g;
                        $bTotal += $b;
                        
						$total++;
                }
        }
		$rAverage = round($rTotal/$total);
		$gAverage = round($gTotal/$total);
		$bAverage = round($bTotal/$total);
		
		$query = mysql_query("SELECT imageid FROM imagedb order by ABS(".$rAverage."-rv)+ABS(".$gAverage."-gv)+ABS(".$bAverage."-bv)");
		
		while($id=mysql_fetch_array($query))
		{
				echo '<'.'img height="30%" width="30%" src="showone.php?id='.$id[0].'"/>';
				echo "	";				
		}

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