<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LAND fast | Slot Booking</title>
    <meta name="description" content="Welcome to the best Hotel around." />    
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <header>
      <nav id="navbar">
        <div class="container">
          <h1 class="logo"><a href="index.html">LAND fast</a></h1>
          <ul>
            <li><a href="index.php">Home</a></li>  
            <li><a href="contact.php">Contact</a></li>         
            <li><a href="about.php">About</a></li>
            <li><a class="current" href="order.php">Book your slot Now</a></li>
            <li><a href="login.php">Login</a></li> 
          </ul>
        </div>
      </nav>
    </header>
    <section id="contact-form" class="py-3">
      <div class="container">
        <!-- OrderNow -->
        <h1 class="l-heading"><span class="text-primary">Book your slot</span> Now!</h1>
        <p>for a seamless product launching experience</p>
        <form method='POST' action='./server_scripts/order_handler.php'>
          <div class="form-group">
            <label for="first-name">First Name</label>
            <input type="text" name="firstname" id="first-name" />
          </div>
          <div class="form-group">
            <label for="last-name">Last Name</label>
            <input type="text" name="lastname" id="last-name" />
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" />
          </div>
              <div class="form-group">
                <label for="Number">Phone Number</label>
                <input type="number" name="number" id="number" />
              </div>
          <div class="form-group">
            <label for="message">Address</label>
            <textarea name="address" id="message"></textarea>
          </div>
          <button type="submit" class="btn c">Order</button>
          <p class="bottom-text">
            By clicking the Order button, you agree to our
            <a href="#">Terms & Conditions</a> and
            <a href="#">Privacy Policy</a>
          </p>
        </form>
      </div>
      </div>
    </section>
    <section id="contact-info" class="bg-dark">
      <div class="container">
        <div class="box">
          <i class="fas fa-hotel fa-3x"></i>
          <h3>Location</h3>
          <p>LAND fast st,somewhere in chennai</p>
        </div>
        <div class="box">
          <i class="fas fa-phone fa-3x"></i>
          <h3>Phone Number</h3>
          <p>271491349831</p>
        </div>
        <div class="box">
          <i class="fas fa-envelope fa-3x"></i>
          <h3>Email</h3>
          <p>LAND fast Helpline</p>
        </div>
      </div>
    </section>
    <footer id="main-footer">
      <p>LAND fast &copy; 2020, All Rights Reserved</p>
    </footer>
    <script
      src="https://kit.fontawesome.com/8da90a7057.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
