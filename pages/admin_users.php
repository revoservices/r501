<?php
$users = selectField("users","username");
foreach ($users[0] as $k=>$v) {
echo $v."<br>";
}
?>
