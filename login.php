<?php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="login.css"/>
  </head>

  <body>
    <section>
      <div class="container">
        <div class="user singinBx">
          <div class="imgBx"><img src="img1.png" /></div>
          <div class="formBx">
            <form action="loginModel.php" method="POST">
              <h2>Sign In</h2>
              <input type="email" name="email" placeholder="Enter Your Email" />
              <input type="password" name="password" placeholder="Password" />
              <input type="submit" name="login" value="Login" />
              <p class="singup">
                Don't have an account ?
                <a href="#" onclick="toggleForm();">Sign Up.</a>
              </p>
            </form>
          </div>
        </div>

        <div class="user singupBx">
          <div class="formBx">
            <form action="loginController.php" method="POST">
              <h2>Create an Account</h2>
              <div class="name" style="display: flex;">
                <input
                  type="text"
                  name="firstname"
                  placeholder="FirstName"
                  required=""
                  style="width: 170px; margin-right: 10px;"
                />
                <input
                  type="text"
                  name="lastname"
                  placeholder="LastName"
                  required=""
                  style="width: 170px;"
                />
              </div>
              <input
                type="text"
                name="username"
                placeholder="Username"
                required=""
              />
              <input
                type="email"
                name="email"
                placeholder="Email Address"
                required=""
              />
              <input
                type="password"
                name="password"
                placeholder="Create Password"
                required=""
              />
              <input
                type="password"
                name="cpassword"
                placeholder="Confirmed Password"
                required=""
              />
              <input
                type="text"
                name="image"
                placeholder="Enter Image Link"
                required=""
              />
              <input type="submit" name="register" value="Sign Up" />
              <p class="singup">
                Already have an account ?
                <a href="#" onclick="toggleForm();">Sign In.</a>
              </p>
            </form>
          </div>
          <div class="imgBx"><img src="img2.png" /></div>
        </div>
      </div>
    </section>

    <script>
      function toggleForm() {
        var container = document.querySelector(".container");
        container.classList.toggle("active");
      }
    </script>
  </body>
</html>
