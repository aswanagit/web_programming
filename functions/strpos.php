<html>
<head>
<title>
string function:strpos()</title>
</head>
<body>
<?php
$string="I am anil";
$pos=strpos($string,"i");
if($pos==false)
{
echo "not found";
}
else
{
echo "found at $pos..!";
}
?>
</body>
</html>
