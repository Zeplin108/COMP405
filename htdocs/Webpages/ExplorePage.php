<!DOCTYPE html>
<html>
  <head>
    <title>Consumables</title>
    <link href="LandingPage.css" type="text/css" rel="Stylesheet" id="currstyle"/>
  </head>
    <body>
      <!-- Nav bar logic -->
      <div class="topnav">
        <a href="LandingPage.php">Home</a>
        <a class="active" href="ExplorePage.php">Explore</a>
        <a href="ReviewsPage.php">Reviews</a>
        <a href="AboutPage.php">About</a>
        <a href="LoginPage.php">Login</a>
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
            acc[i].addEventListener("click", function() 
			{
              this.classList.toggle("active");
              var panel = this.nextElementSibling;
              if(panel.style.display === "block") 
			  {
                panel.style.display = "none";
              } else 
			  {
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
          <section class="boxes">
            <figure>
              <img src="Images/sauce.jpg" style="width: 50%">
              <p>Description: Smooth tomato sauce</p>
              <p>Price: $3.99</p>
              <p style="text-align: right; padding: 10px">->More Info</p>
            </figure>
            <figure>
              <img src="Images/spatula.jpg" style="width: 50%">
              <p>Description: Two pack of spatulas</p>
              <p>Price: $4.99</p>
              <p style="text-align: right; padding: 10px">->More Info</p>
            </figure>
            <figure>
              <img src="Images/bbq.jpg" style="width: 50%">
              <p>Description: Homemade barbeque sauce</p>
              <p>Price: $6.99</p>
              <p style="text-align: right; padding: 10px">->More Info</p>
            </figure>
            <figure>
              <img src="Images/alfredo.jpg" style="width: 40%">
              <p>Description: Creamy alfredo sauce</p>
              <p>Price: $5.99</p>
              <p style="text-align: right; padding: 10px">->More Info</p>
            </figure>
          </section>

          <!-- Pagination logic -->
          <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">&raquo;</a>
          </div>

        </main>
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
