<?php
include('connections.php');
?>
<?php
if(isset($_POST['submit'])){
  if(empty($name) || empty($email) || empty($msg)){
    //echo 'hi there';
    header("Location: ../signup.php?signup=empty");
    exit();
  }
  else{
    if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)){
      header("Location: ../contact.php?contact=invalid");
      exit();
    }else{
      //checking email entered is valid
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../contact.php?contact=invalid_email");
        exit();
      }
    }
       // else{

      header("Location: ../contact.php?successful%declaration");
      echo "we have received your data!";
   // }
   echo "Thank you" .$name. "for your feedback";
}

}
 ?>
