<!DOCTYPE html>
<html lang="zh-tw">
<meta charset="UTF-8">
<head>
<title>loading中</title>
</head>
<body>
<?
$con = mysql_connect('localhost', 'root', '@12345');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("waterhouse", $con);
$sql="SELECT * FROM decoration WHERE name = 'lewis'";
$result = mysql_query($sql);
$num_row=mysql_num_rows($result);
echo $num_row;
echo '<form action="index.html?';
for($i=0;$i<$num_row;$i++)
{

	$row = mysql_fetch_row($result);
	$obj = $row[2]; 
	$mtl = $row[3]; 
	$positionX = $row[4]; 
	$positionY = $row[5];
	$positionZ = $row[6];
	$partid = $row[7];
	if($i>0)
		echo "&";

	echo "partid=$partid&posX$i=$positionX&posY$i=$positionY&posZ$i=$positionZ";
}
echo "&total=$num_row";
echo '" method="POST" name="form1">';
?>
<form action="index.html" method="POST" name="form1">
<input type="submit" value="進入遊戲"/>
</form>
</body>
</html>
