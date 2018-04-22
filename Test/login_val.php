<?php
   include('connections.php');
   include_once 'header.php';


$user=$_POST['username'];
$pwd=$_POST['password'];

//$query = "SELECT * FROM erudito WHERE username='".$user."' AND password='".$pwd."' ";

$rs = pg_query($connections, $query) or die("Cannot execute query: $query\n");
while ($ro = pg_fetch_object($rs)) {
    $user = $ro->username;
    $pwd = $ro->password;
    $email = $ro->email;
    $phoneNumber = $ro->phoneNumber;

    if ($user == $_POST['username'] && $pwd == $_POST['password']){
         header("Location: home2.php");
         $_SESSION["username"] = $user;
         $_SESSION["email"] = $email;
         $_SESSION["phoneNumber"] = $phoneNumber;
      }

    if ($user != $_POST['username']) {
      header("Location: login.html?error=Invalid%20Information!");
    }

    if ($user == "admin") {
      header("Location: profilepage2.php");
    }
 }

pg_close($connections);
?>
<script src="js/script.js"></script>

<?php

include_once 'footer.php';
 ?>
