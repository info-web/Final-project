<?php
  include_once 'header.php';
 ?>
 <style>
 .button:after {
   content: "";
   position: absolute;
   top: -110%;
   left: -210%;
   width: 200%;
   height: 200%;
   opacity: 0;
   transform: rotate(30deg);

   background: rgba(255, 255, 255, 0.13);
   background: linear-gradient(
     to right,
     rgba(255, 255, 255, 0.13) 0%,
     rgba(255, 255, 255, 0.13) 77%,
     rgba(255, 255, 255, 0.5) 92%,
     rgba(255, 255, 255, 0.0) 100%
   );
 }

 /* Hover state - trigger effect */

 .button:hover:after {
   opacity: 1;
   top: -30%;
   left: -30%;
   transition-property: left, top, opacity;
   transition-duration: 0.7s, 0.7s, 0.15s;
   transition-timing-function: ease;
 }

 /* Active state */

 .button:active:after {
   opacity: 0;
 }
.button{
    background-color: #5D6D7E;
    border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: block;
    width: 90%;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  }
  .button1{
    border-radius: 4px;
  }
 </style>
   <main>
        <section class="well well__offset-3">
            <div class="container">
                <h2><em>Topics to choose from</em></h2>
                 <div class="row row__offset-2">
                    <div class="grid_6">
                        <p class="indents-3"><a href = "#fend"><img src = "pictures/course2.png"></a></p>
                        <!-- <div class="img"><div class="lazy-img" style="padding-bottom: 45.6140350877193%;"><img data-src="pictures/bootstrap-stack.png" alt="asfldkasljfdas" ></div></div> -->
                    </div>
                    <div class="grid_6">
                        <p class="indents-3"><a href = "#bend"><img src = "pictures/course1.png"></a></p>
                    </div>
                    <div class="grid_6">
                        <p class="indents-3"><a href = "#oend"><img src = "pictures/course3.png"></a></p>
                    </div>
                    <div class="grid_6">
                        <p class="indents-3"><a href = "#dend"><img src = "pictures/course_4.png"></a></p>
                    </div>
                 </div>
            </div>
        </section>
        <section class="parallax parallax5" data-parallax-speed="-0.4">
            <div class="container">
                <h2><em>Learn new technologies</em>Achieve it. Proceed.</h2>
                <div class="row">
                    <div class="grid_6">
                        <p class="indents-3">The overall idea is to keep the design simple, so that the content and the visual does not overwhelm the student, but in the same time, inspire them to do more. The main aim of this site, is to create an environment, which can gives basic idea about the courses which are currently in trend, with the features which will allow the user to have an interactive environment, all for free instead of charging as other sites do. </p>
                    </div>
                    <div class="grid_6">
                        <p class="indents-3"><br><br>In this site, we are providing 12 courses, across all the branches of Computer Science, each having certain difficulty level for the users to choose, so that the person who is interested can learn the content without feeling overwhelmed with the concept.</p>
                    </div>
                </div>
            </div>
        </section>
       <section class="well well__offset-4">
            <div class="container">
                <h2><em>Courses</em>to choose from</h2>
                <div class="row">
                    <div class="grid_4">
                      <button type="button" class="button button1" id = "fend"><em>HTML</em></button>
                      <button type="button" class="button button1" id = "fend"><em>CSS3</em></button>


                    </div>
                    <div class="grid_4">
                      <button type="button" class="button button1" id = "fend"><em>JavaScript</em></button>
                      <button type="button" class="button button1" id = "oend"><em>Java</em></button>


                    </div>
                    <div class="grid_4">
                      <button type="button" class="button button1" id = "bend"><em>PHP</em></button>
                      <button type="button" class="button button1" id = "bend"><em>MySQL</em></button>
                    </div>
                </div>
                <div class="row">
                    <div class="grid_4">
                      <button type="button" class="button button1" id = "oend"><em>Python</em></button>
                      <button type="button" class="button button1" id = "oend"><em>C++</em></button>
                    </div>
                    <div class="grid_4">
                      <button type="button" class="button button1" id = "dend"><em>Machine learning</em></button>
                      <button type="button" class="button button1" id = "dend"><em>Deep Learning</em></button>
                    </div>
                    <div class="grid_4">
                      <button type="button" class="button button1" id = "fend"><em>BootStrap</em></button>
                      <button type="button" class="button button1" id = "oend"><em>Basic Programming</em></button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!--========================================================
                              FOOTER
    =========================================================-->
    <?php
    include_once 'footer.php';
     ?>
