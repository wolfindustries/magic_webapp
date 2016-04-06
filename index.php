<?php
require "flight/Flight.php";
require "shared/config.inc.php";
require "shared/functions.php";

if(!isset($_SESSION)) {
	session_start();
}

Flight::path(CLASS_PATH);

Flight::route("/system",function() {
	Flight::render("header.php");
	Flight::render("footer.php");
});

Flight::route("/users",function() {
	Flight::render("header.php");
	Flight::render("footer.php");
});

Flight::route("/version",function() {
	Flight::render("header.php");
	Flight::render("footer.php");
});

Flight::route("/cards",function() {
	Flight::render("header.php");
	Flight::render("footer.php");
});

Flight::route("/", function(){
	Flight::render("header.php");
	Flight::render("footer.php");
});

Flight::route("*",function() {
	echo "anything";
});

Flight::start();

?>