<?php
include('connections.php');
include_once 'header.php';
 ?>
 <style>
 body,h1,h2,h3,h4,h5,h6 {
   font-family: "georgia", sans-serif;
   background-color: #FFFFFF;
   padding-left:200px;
   background: url(pictures/login_bg.jpg) no-repeat center  fixed;
   background-size: cover;
   z-index: -1;
 }
 h2 em{
   text-align: center;
   font-size: 60px;
   line-height: 30px;
   color: #FDFEFE;
 }
 input{
   margin-bottom: 15px;
   margin-top: 10px;
 }

 .main-wrapper{
   width: 800px;
   margin: 0 auto;
   padding-left:200px;
   padding-bottom: 300px;
   padding-top: 100px;
   z-index: 2;
}

.main-container label {
  color: black;
  font-size: 20px;
  font-family: georgia;
  background-color: inherit;

    /* padding-bottom: 10px;
    padding-top: 20px;
    margin-bottom: 10px; */

}
 .check-form{
   padding-top: 20px;
   padding: 50px;
   padding-bottom: 20px;
   margin-bottom: 10px;
   margin-top: 20px;

 }

 main {
   background: url(pictures/login_bg.jpg) no-repeat center  fixed;
   background-size: cover;

 }
</style>
 <section class="main-container">
   <div class="main-wrapper">
     <h2><em>Course Selector</em></h2>
     <form class = "check-form" action = "sup_logic.php" method = "POST">
 			<label>Total time </label><br>
      <input type = "text" name = "time_tot" placeholder = "Total time"><br>
 			<label> Time per day </label><br>
      <input type = "text" name = "time_day" placeholder = "Time per day"><br>
      <div id = "radio_but">
      <input type = "radio" name = "level" value = "'beginner'"> <label>Beginner</label><br>
      <input type = "radio" name = "level" value = "'Intermediate'"> <label>Intermediate</label><br>
      <input type = "radio" name = "level" value = "'Expert'"> <label>Expert</label><br>
    </div>
      <button type = "submit" name = "submit">Submit </button>
 		</form>
   </div>
 </section>

 <script src="js/script.js"></script>
 </body>
 </html>
