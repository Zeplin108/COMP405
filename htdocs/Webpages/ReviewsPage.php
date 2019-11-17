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
      <a href="ExplorePage.php">Explore</a>
      <a class="active" href="ReviewsPage.php">Reviews</a>
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
          <h2>Reviews</h2>
        </div>

        <!-- Logic for products on Reviews page -->
		<?php
			include 'db_connection.php';
			
			function item_template($item_values)
			{
				return "<figure>
					<img src='Images/sauce.jpg' style='width: 50%'>
					<p>" . $item_values["product_desc"]. "</p>
					<p>" . $item_values["review_id"]. " From: " . $item_values["user_id"]."</p>
					<p style='text-align: right; padding: 10px'>->More Reviews</p>
					</figure>";
			}
			

			$conn = OpenCon();
			$result = SelectReviewsDb($conn);
		
			if ($result->num_rows > 0) 
			{
				// Output data of each row.
				while($item_values = $result->fetch_assoc()) 
				{
					$item = item_template($item_values);
					
					echo "<section class='boxes'>" . $item ."</section>";
				}
			} else 
			{
				echo "0 results";
			}
			CloseCon($conn);
		?>
		
		
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
