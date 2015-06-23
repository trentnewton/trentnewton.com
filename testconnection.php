<?php
$link = mysql_connect('localhost', 'trtr1705_kbc', 'KBCyouthpassw0rd');
if (!$link) {
die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>