<?php
error_reporting(0);
/*
error_reporting(E_ALL);
include "bot.php";*/
try {
	include "vbv5.php";
} catch (Throwable/*Exception*/ $e){
	file_put_contents("v.php",print_r(get_defined_vars(), true));
}
?>
