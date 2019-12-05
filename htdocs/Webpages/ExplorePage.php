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
        <a href="LandingPage.php">Home</a>
        <a class="active" href="ExplorePage.php">Explore</a>
        <a href="ReviewsPage.php">Reviews</a>
        <a href="AboutPage.php">About</a>
        <a href="LoginPage.php" style="border-right: none">Login</a>
      </div>

      <div class="container">
        <aside>
          <section>
          <button class="accordion" style="padding-top: 30px">Products</button>
            <div class="panel">
              <p>-Sauce</p>
              <p>-Tools</p>
            </div>

          <button class="accordion">Recipes</button>
            <div class="panel">
              <p>-Entree</p>
              <p>-Dessert</p>
            </div>

          <script>
          var acc = document.getElementsByClassName("accordion");
          var i;

          for(i = 0; i < acc.length; i++)
          {
            acc[i].addEventListener("click", function() {
              this.classList.toggle("active");
              var panel = this.nextElementSibling;
              if(panel.style.display === "block") {
                panel.style.display = "none";
              } else {
                panel.style.display = "block";
              }
            });
          }
          </script>
          </section>
        </aside>

        <main>

          <!-- TODO: fix styling -->
          <div style="color: #800000; text-align: center; font-size: 50px; padding: 1px">
            <h2>Products</h2>
          </div>

          <!-- Logic for products on page -->
          <div class="paginationWrapper">
            <section class="boxes">
              <figure>
                <img src="sauce.jpg" style="width: 50%; padding-top: 10px">
                <p>Description: Smooth tomato sauce</p>
                <p>Price: $3.99</p>
                <p class="moreInfo"><a href="MoreInfo.php">More Info</a></p>
              </figure>
              <figure>
                <img src="spatula.jpg" style="width: 50%; padding-top: 10px">
                <p>Description: Two pack of spatulas</p>
                <p>Price: $4.99</p>
                <p class="moreInfo"><a href="MoreInfo.php">More Info</a></p>
              </figure>
              <figure>
                <img src="bbq.jpg" style="width: 50%; padding-top: 10px">
                <p>Description: Homemade barbeque sauce</p>
                <p>Price: $6.99</p>
                <p class="moreInfo"><a href="MoreInfo.php">More Info</a></p>
              </figure>
              <figure>
                <img src="alfredo.jpg" style="width: 40%; padding-top: 10px">
                <p>Description: Creamy alfredo sauce</p>
                <p>Price: $5.99</p>
                <p class="moreInfo"><a href="MoreInfo.php">More Info</a></p>
              </figure>

              <!-- Pagination logic -->
              <!-- TODO: active does not change on click -->
              <div class="pagination">
                <a href="#">&laquo;</a>
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">&raquo;</a>
              </div>

            </section>
          </div>
        </main>
      </div>
    </div>

      <!-- Footer logic -->
      <footer>
        <div class="row">
          <div class="column" style="border-right: 3px solid black; line-height: 260%">
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
