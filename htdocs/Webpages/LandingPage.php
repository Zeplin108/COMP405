<!DOCTYPE html>
<html>
  <head>
      <title>Consumables</title>
      <link href="LandingPage.css" type="text/css" rel="Stylesheet" id="currstyle"/>
  </head>
      <body>
        <div class="content">
        <!-- Nav bar logic -->
        <div class="topnav">
          <a class="active" href="LandingPage.php">Home</a>
          <a href="ExplorePage.php">Explore</a>
          <a href="ReviewsPage.php">Reviews</a>
          <a href="AboutPage.php">About</a>
          <a href="LoginPage.php">Login</a>
        </div>

        <!-- TODO: fix styling -->
        <div style="color: #800000; text-align: center; font-size: 50px; padding: 0px">
          <h2>Consumables</h2>
        </div>

        <!-- Logic for picture slideshow -->
        <div class="slideshow-container">

        <div class="slideImages">
          <img src="pasta.jpg" style="width: 100%">
        </div>

        <div class="slideImages">
          <img src="luna.jpg" style="width: 100%">
        </div>

        <div class="slideImages">
          <img src="phillies.jpg" style="width: 100%">
        </div>

        <div class="slideImages">
          <img src="race.jpg" style="width: 100%">
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

      </div>
      <br>

      <div style="text-align: center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>

        <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n)
        {
          showSlides(slideIndex += n);
        }

        function currentSlide(n)
        {
          showSlides(slideIndex = n);
        }

        function showSlides(n)
        {
          var i;
          var slides = document.getElementsByClassName("slideImages");
          var dots = document.getElementsByClassName("dot");
          if(n > slides.length) {slideIndex = 1}
          if(n < 1) {slideIndex = slides.length}
          for(i = 0; i < slides.length; i++)
          {
            slides[i].style.display = "none";
          }
          for(i = 0; i < dots.length; i++)
          {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
        }
        </script>
        <!-- End picture slideshow logic -->
      </div>

        <!-- Footer logic -->
        <footer>
          <div class="row">
            <div class="column">
              <p>We are dedicated to delivering a wide variety of products
                made available by users.</p>
            </div>
            <div class="column">
              <p>Home Office: Salt Lake City, Utah</p>
              <p>Phone: 801-555-2323</p>
            </div>
          </div>
        </footer>
      </body>
</html>
