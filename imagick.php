<html>
<head>
<title>Test for ImageMagick</title>
</head>
<body>
<?
function alist ($array) { //This function prints a text array as an html list.
$alist = "<ul>";
for ($i = 0; $i < sizeof($array); $i++) {
$alist .= "<li>$array[$i]";
}
$alist .= "</ul>";
return $alist;
}
exec("convert -version", $out, $rcode); //Try to get ImageMagick "convert" program version number.
echo "Version return code is $rcode <br>"; //Print the return code: 0 if OK, nonzero if error.
echo alist($out); //Print the output of "convert -version"
//Additional code discussed below goes here.
echo "Customer ID: 1";
?>
</body>
</html>
