<?php
include('connections.php');
include_once 'header.php';
?>
<style>
body,h1,h2,h3,h4,h5,h6 {
  font-family: "georgia", sans-serif;
  background-color: #FFFFFF;
  padding-left:300px;
  background: url(pictures/login_bg.jpg) no-repeat center  fixed;
  background-size: cover;}
main form{
  padding-left:300px;
  padding-bottom: 10px;
  padding-top: 10px;
}

main {
  background: url(pictures/login_bg.jpg) no-repeat center  fixed;
  background-size: cover;
}

</style>
<div>
 <!-- !PAGE CONTENT! -->
<main>
  <section class="well well__offset-3">
    <div class="container">
      <div class="row box-3">
        <div class="grid_5">
          <h2><em>Sign up</em></h2>
          <form method="POST" action="signup.php">
	       <label>Username: </label>
	       <input type="text" name="username">
	       <br>
	       <label>Password: </label>
	       <input type="password" name="password">
	       <br>
	       <label>confirm Password: </label>
	       <input type="password" name="confirmPassword">
         <br>
         <label> Email: </label>
         <input type="text" name="email">
         <br>
         <label> Phone Number: </label>
         <input type="text" name="phoneNumber" placeholder="ex)(012) 345-6789">
         <br>
	       <input type="submit" name="submit">
        </form>
      </div>
    </div>
   </div>
 </section>
</main>
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>
<script src="js/script.js"></script>
</body>
</html>
