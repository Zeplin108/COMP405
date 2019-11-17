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
          <h2>Reviews</h2>
        </div>

        <!-- Logic for products on Reviews page -->
    <div class="paginationWrapper">
		<?php
			include 'db_connection.php';
			
			// Returns the html template, filled with the information for each individual item.
			function item_template($review_id, $conn)
			{
				// Assigns query results of username and comments to 'user'.
				$user = SelectUserAndReviewDb($conn, $review_id);
				
				// Checks if the number of rows returned from query is at least one.
				if ($user->num_rows > 0)
				{
					// Finds MySQL associations from items in array, allowing them to be indexed inside of the return by key.
					$user_values = $user->fetch_assoc();
					
					return "<figure>
					<img src='Images/sauce.jpg' style='width: 40%; padding-top: 10px'>
					<p>" . $item_values["product_desc"]. "</p>
					<p>" . $user_values["comments"]. " From: " . $user_values["username"]."</p>
					<p style='text-align: right; padding: 10px'>->More Reviews</p>
					</figure>";
				}
			}
			
			// Open connection to MySQL.
			$conn = OpenCon();
			// Select results of reviews from database.
			$result = SelectReviewsDb($conn);
		
			if ($result->num_rows > 0) 
			{
				// Output data of each row.
				while($item_values = $result->fetch_assoc()) 
				{
					$item = item_template($item_values["review_id"], $conn);
					
					echo "<section class='boxes'>" . $item ."</section>";
				}
			} else 
			{
				echo "0 results";
			}
			// Close MySQL connection.
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
