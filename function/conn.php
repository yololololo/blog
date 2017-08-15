<?php
$dsn="mysql:host=localhost;dbname=test";
try{
	$db=new PDO($dsn,'root','root');
}catch(PDOException $e){
	die("错误：".$e->getMessage());
}