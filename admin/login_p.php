<?php
session_start();
 $code=$_SESSION['code'];//验证码正确的值
 $mycode=$_POST['mycode'];
if($mycode==$code){
 require_once('../function/conn.php');
 $username=$_POST['username'];
 $password=$_POST['password'];
 $sql="select * from admin where username='{$username}'";
 $res=$db->query($sql);
 $row=$res->fetch(PDO :: FETCH_ASSOC);
 if($row){
 	header("location:home.php?user={$username}");
 }else{
 	header("location:login.php?errno=2");
 }
}else{
	header("location:login.php?errno=1");
}
