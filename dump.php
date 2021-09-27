<?php
$str = "cd C:/xampp/mysql/bin && mysqldump --user=root --password= --host=localhost biblioteca --result-file=C:/xampp/htdocs/mylib/dumps/dump".date('d-m-Y').".sql 2>&1";
system($str);
header("Location: index.php");
?>