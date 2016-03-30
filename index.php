<?php
require "flight/Flight.php";
require "shared/config.inc.php";
require "shared/functions.php";

if(!isset($_SESSION)) {
	session_start();
}

Flight::path(CLASS_PATH);

Flight::route("/", function(){
	Flight::render("header.php");
	Flight::render("footer.php");
});

Flight::route("*",function() {
	echo "anything";
});

Flight::start();

?>