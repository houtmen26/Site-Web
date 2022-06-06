<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "eisti0001";
 $db = "mangashopdata";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Probleme: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>