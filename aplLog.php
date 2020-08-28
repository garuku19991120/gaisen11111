<?php


function printErrorLog($message) {

	error_log(date("Y/m/d H:i:s").$message,3,'/var/log/api_err.log');

}


?>
