<?php
include('connections.php');
include_once 'header.php';
?>
<header>
  <div class="page">
        <div class="camera_container">
            <div id="camera" class="camera_wrap">
                <div data-src="pictures/knowledge-is-power.jpg">
                    <div class="camera_caption fadeIn">
                    </div>
                </div>
                <div data-src="pictures/kip.jpg">
                    <div class="camera_caption fadeIn">
                    </div>
                </div>
                <div data-src="pictures/LMM-Cover-Images-7.jpg">
                    <div class="camera_caption fadeIn">
                    </div>
                </div>
            </div>

            <div class="brand wow fadeIn">
                <h1 class="brand_name">
                    <a href="home.html">Erudito</a>
                </h1>
            </div>
        </div>
  </div>
  </header>

<!-- !PAGE CONTENT! -->
<main>
  <section class="well">
    <div class="container">
    <h2><em>Welcome</em>to Erudito</h2>
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

    <div>
      <h2><b>Your own learning portal</b></h2>
      <h3 class="center indents-1">Knowledge gives you wings.</h3>
      <p class="center indents-1">Erudito, uses prediction system, to suggest topics to the users. The input involves the amount of time they are willing to spend in learning, their current education level, what type of difficulty level they are hoping for and finally their area of interest. We will take these into consideration while devising a method to suggest those three courses based on their difficulty level priority.</p>
       </div>
      </div>


<!-- End page content -->
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
<!--FOOTER-->
<?php
include_once 'footer.php';
 ?>
