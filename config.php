<?php
$link=mysql_connect("localhost","root","") or die("cannot connect to db". mysql_error());
$db=mysql_select_db("matrimony") or die("cannot find db". mysql_error());
?>