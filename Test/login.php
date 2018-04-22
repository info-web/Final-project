<?php
  include('connections.php');
  include_once 'header.php';
?>

<style>
body {
  background: url(pictures/login_bg.jpg) no-repeat center  fixed;
  background-size: cover;

}

</style>
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
  <div class="w3-container w3-padding-32 w3-center">
    <!--<img src="login.jpeg" alt="food" class="w3-image" style="display:block;margin:auto" width="800" height="533">-->
    <div class="w3-padding-32">
    <br>
  <form name="insert" method="POST" action="login_val.php">
    <label>Username:</label>
    <input type="text" name="username">
    <br>
    <br>
    <label>Password:</label>
    <input type="password" name="password">
    <br>
    <br>
    <input type="submit" name="Submit">
  </form>
  </div>


<!-- End page content -->
</div>
</div>
<!--<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>-->
<?php
  include_once 'footer.php';
?>
