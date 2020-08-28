<?php

function h($string)
{
    return htmlspecialchars($string, ENT_QUOTES, 'utf-8');
}

function connect()
{
    //$dsn = 'mysql:host=localhost;dbname=tenpomnu;charset=utf8mb4;';
    $dsn = 'host=itcdev3.hallpower.jp port=5432 dbname=angular_testdb user=symphony;';
    $username = 'symphony';
    $password = '';
    $pdo = new PDO($dsn, $username, $password);
    return $pdo;
}

function connect_pg()
{
	$dsn = 'host=itcdev3.hallpower.jp port=5432 dbname=angular_testdb user=symphony';
	$pgCon = pg_connect($dsn);
  echo "aaa";
	return $pgCon;
}

function close_pg($pgCon) {
	pg_close($pgCon);
}


function fnc_checkdate($string)
{
	$date_data = str_replace('/', '', $string);

	if(strlen($date_data) < 8) {
		return false;
	}


	$year = substr($date_data, 0, 4);
	$month = substr($date_data, 4, 2);
	$day = substr($date_data, 6, 2);

	if(!is_numeric($year)) {
		return false;
	}
	if(!is_numeric($month)) {
		return false;
	}
	if(!is_numeric($day)) {
		return false;
	}

	if (!checkdate($month, $day, $year)) {
		return false;
	}

	return true;
}

?>
