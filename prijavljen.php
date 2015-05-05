<?php
if(!isset($_POST["email"]) && 
!isset($_POST["lozinka"])){
	header("location: index.php");
}

//tu dođe autorizacija na bazu

if($_POST["email"]=="dstojanovic@ffos.hr" && 
$_POST["lozinka"]=="bazepodataka"){
	
	session_start();
	$o=new stdClass();
	$o->ime="Dajana";
	$o->prezime="Stojanović";
	$o->email="dstojanovic@ffos.hr";
	$_SESSION["autoriziran"]=$o;
	
	header("location: index.php");
}
