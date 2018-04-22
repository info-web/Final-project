<?php
include('connections.php');
include_once 'header.php';


?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
input[type=text]{
    width: 100%; /* Full width */
    padding: 8px; /* Some padding */
    border: 1px solid #ccc; /* Gray border */
    border-radius: 4px; /* Rounded borders */
    box-sizing: border-box; /* Make sure that padding and width stays in place */
    margin-top: 8px; /* Add a top margin */
    margin-bottom: 16px; /* Bottom margin */
    resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

textarea[type=text]{
    width: 100%; /* Full width */
    padding: 8px; /* Some padding */
    border: 1px solid #ccc; /* Gray border */
    border-radius: 4px; /* Rounded borders */
    box-sizing: border-box; /* Make sure that padding and width stays in place */
    margin-top: 8px; /* Add a top margin */
    margin-bottom: 16px; /* Bottom margin */
    resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}
input[type=submit]:hover {
    background-color: #BDC3C7;
}
input[type = submit]{
  text-align: center;
  margin: 0 auto;
  display: block;
}
.format{
	text-align: center;
  width: 50%;
  border-width: thin;
  margin: 100px auto;
  }

.row:after {
    content: "";
    display: table;
    clear: both;
		position: static;

	}
</style>

<main>
  <section class="well">
  <div class="container">
  <h2><em>Contact Form</em></h2>
  <div id="Contact" class="tabcontent">
  	<div class = "format">
  	<form action = "contact_val.php" method="post">
  	<div class = "right"> <input type="text" placeholder ="fullname" name = "name" id = "firstname"></div><br>
  	<div class = "right"><input type="text" name ="email" placeholder = "mail-id" id = "lastname"></div> <br>
  	<div class = "right"><textarea type="text" name ="msg" placeholder = "message you want to deliver" id = "mail"></textarea></div> <br>
  	<div class="row">
        <input type="submit" value="Submit">
    </div>
    </form>
  </div>
  </div>
  <div class="row"></div>
    <div class="grid_6" id="map">
      <script>
        function initMap() {
          var uluru = {lat: 39.171969, lng: -86.510235};
          var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: uluru
        });

          var marker = new google.maps.Marker({
            position: uluru,
            map: map
          });
        }
      </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmT54jKTc9ehbjZ2FNtwRqqd29xkuzYbw&callback=initMap">
    </script>
  </div>
    <p class="center indents-1"> Erudito address: 1811 E 10th St, Bloomington, IN 47408 </p>
  </div>
</section>
</main>


<?php
include_once 'footer.php';
 ?>
