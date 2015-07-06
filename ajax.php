<?php

$c = $_REQUEST['c'];
$arr = array(
	'a'=>2014,
	'b'=>array('c'=>$c)
);
echo json_encode($arr);