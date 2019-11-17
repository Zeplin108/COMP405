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
        <a class="active" href="LoginPage.php" style="border-right: none">Login</a>
      </div>

      <!-- TODO: fix styling -->
      <div style="color: #800000; text-align: center; font-size: 50px; padding: 0px">
        <h2>Login</h2>
      </div>

      <!-- Login box -->
      <div class="formBox">
        <form action="LoginFunction.php" method="post">
          <div class="loginBoxes">
            <label for="email"><b>Email Address</b></label>
            <input type="text" placeholder="Enter your email address" name="email" required>

            <label for="pword"><b>Password</b></label>
            <input type="password" placeholder="Enter your password" name="pword" required>

            <button type="submit">Login</button>
          </div>
      </div>

      <div class="newUserBox">
        <div class="box">
          <p>New user? <a href="CreateAccount.php">Create An Account</a></p>
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
