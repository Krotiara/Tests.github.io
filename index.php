
<?php
include_once "mysql_connect.php";
mysql_query("UPDATE counter SET `views` = `views`+1 WHERE id='1'");

?>

<!DOCTYPE html>
<html>
<head></head>
<body>Hello</body>
</html>