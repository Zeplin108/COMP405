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
        <a href="ReviewsPage.php">Reviews</a>
        <a href="AboutPage.php">About</a>
        <a href="LoginPage.php" style="border-right: none">Login</a>
      </div>

      <!-- TODO: fix styling -->
      <div style="color: #800000; text-align: center; font-size: 50px; padding: 0px">
        <h2>Create Account</h2>
      </div>

      <!-- Create Account box -->
      <div class="formBox" style="padding-bottom: 20px">
        <form action="CreateAccountFunction.php" method="post">
          <div class="loginBoxes">
            <label for="email"><b>First Name</b></label>
            <input type="text" placeholder="Enter your first name" name="email" required>

            <label for="email"><b>Last Name</b></label>
            <input type="text" placeholder="Enter your last name" name="email" required>

            <label for="email"><b>Email Address</b></label>
            <input type="text" placeholder="Enter your email address" name="email" required>

            <label for="pword"><b>Password</b></label>
            <input type="password" placeholder="Enter your password" name="pword" required>

            <label for="pword"><b>Confirm Password</b></label>
            <input type="password" placeholder="Re-enter your password" name="pword" required>

            <button type="submit">Create Account</button>
          </div>
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
