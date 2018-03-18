<?php
$username=$_POST['user'];
$password=$_POST['pass'];

//to prevent mysql injection
/*
$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);
*/
//connect to the server and select database

mysql_connect("localhost","root","");
mysql_select_db("hotelmanage");

//query the database for user
$result=mysql_query("select * from loginform where username='$username'and password='$password'")
        or die("Failed to query database".mysql_error());

$row=mysql_fetch_array($result);
if($row['username']==$username && $row['password']==$password){
    echo "<script> window.location.assign('user.html'); </script>";

}
else{
    echo "<script> alert('invalid username and password');window.location.assign('login1.html');</script>";
}

?>