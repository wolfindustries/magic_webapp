<?php
error_reporting(E_NOTICE);

DEFINE("CLASS_PATH","");

//postgres connection
/**
need to duplicate on chromebook
also, it's broken on desktop, so...still have no idea what I'm doing with postgres, top keks
*/
$postgresStr = "host=localhost port=5432 user=magic_webapp password=fubar";
//$postgres = pg_connect($postgresStr);
?>