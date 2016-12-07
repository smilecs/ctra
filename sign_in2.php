<?php
session_start();
include_once('conf/db_connect.php');
connect();
// Define $myusername and $mypassword
$uname=$_POST['username'];
$pword=$_POST['password'];
// To protect MySQL injection (more detail about MySQL injection)
$uname=stripslashes($uname);
$pword=stripslashes($pword);
$uname=mysql_real_escape_string($uname);
$pword=mysql_real_escape_string($pword);

$result=query("SELECT * FROM account WHERE uname='$uname' AND pwd='$pword'");
$count=mysql_num_rows($result);
$row = mysql_fetch_array($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
  $_SESSION['logged_in'] = 1;
  $_SESSION['id'] = $row['id'];
  $_SESSION['name'] = $row['uname'];
  $priv = $row['priv'];
  $_SESSION['priv'] = $priv;
    redirect("index.php");


}
else {
echo "Wrong Username or Password";
    echo $uname; echo $pword;
}

?>
