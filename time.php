<!DOCTYPE html>
<html lang="zh-tw">
<meta charset="utf-8">
<head>
</head>
<body>
<script>
SetCookie("hour",0);
SetCookie("min",0);

function SetCookie(name,value){
                        var NameString = name + "=" + value;
                                document.cookie = NameString;
                        }

                function GetCookie(name) { 
                        var arr = document.cookie.match(new RegExp("(^| )"+name+"=([^;]*)(;|$)")); 
                        if(arr != null) return unescape(arr[2]); return null; 
}

</script>
<?
$phour=$_GET['hour'];
$pmin=$_GET['min'];
$name="lewis";
$passwd="0228";
$con = mysql_connect('localhost', 'root', '@12345');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("waterhouse", $con);
$str= "select * from account where `name`='$name'";
$result=mysql_query($str);
$row = mysql_fetch_row($result);

$time=explode(":",$row[3]);
$hour=$time[0];
$min=$time[1];
$sec=$time[2];
$min=$pmin+$min;
$hour=$phour+$hour;
$str = "update `account` set `playtime` = '$hour:$min:$sec' where `name` = '$name'";
mysql_query($str);   
if($hour=="")
	$hour=0;

echo "你已遊玩遊戲";
echo $hour;

echo "小時";
echo $min;
echo "分鐘";
?>
<form id="form3" action="index.html" method="post">
<input type="submit" value="確定">
</form>
</body>
</html>
