<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("files/webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile, 4); //filesize("files/webdictionary.txt"));
fclose($myfile);
?>

</body>
</html>