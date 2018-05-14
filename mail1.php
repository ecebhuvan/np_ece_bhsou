<?php 

$mail = $_POST['email'];
$sname = $_POST['sname'];

mail('$mail', 'HI Team', "Hello by $sname");

?>
