<!DOCTYPE html>
<html lang="zh-tw">
<meta charset="utf-8">
<head>
</head>
<body>
<?
$partid=$_GET['partid'];
$posX=$_GET['posX'];
$posY=$_GET['posY'];
$posZ=$_GET['posZ'];
$id=$_GET['id'];
$con = mysql_connect('localhost', 'root', '@12345');
if (!$con)
  { 
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("waterhouse", $con);
$sql="INSERT INTO `decoration` (`id`, `name`, `obj`, `mtl`, `positionX`, `positionY`, `positionZ`, `partid`) VALUES ($id,'monkey','monkey.obj','monkey.mtl',$posX,$posY,$posZ,$partid)";
        $result = mysql_query($sql);
?>
<form id="form2" action="index.html" method="post">
<input type="submit" value="確定新增">
</form
</body>
</html>
