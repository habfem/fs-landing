<?php include('./userinformation.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page with PHP</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <section class="main">
    <nav>
      <a href="#" class="logo">
        <img src="img/logo1.png">
      </a>

      <ul class="menu">
        <li><a href="#" class = "active">Home</a></li>
        <li><a href="#">Features</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
    <div class = "main-heading">
      <h1>Virtual Reality</h1>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus laborum omnis similique nulla quisquam, qui suscipit aut.</p>
      <a class="main-btn" href="#">Contact</a>
    </div>
  </section>

  <section class="features">
    <div class="feature-container">

      <div class="feature-box">
        <div class="f-img">
          <img src="img/info-icon-1.svg" alt="info-icon">
        </div>
      <div class="f-text">
        <h4>Software Development</h4>
        <p>Lorem ipsum dolor sit.</p>
        <a href ="#" class="main-btn">Check</a>
      </div>
      </div>

      <div class="feature-box">
        <div class="f-img">
          <img class="img" src="img/info-icon-2.svg" alt="info-icon">
        </div>
      <div class="f-text">
        <h4>Machine Learning</h4>
        <p>Lorem ipsum dolor sit.</p>
        <a href ="#" class="main-btn">Check</a>
      </div>
      </div>

      <div class="feature-box">
        <div class="f-img">
          <img src="img/info-icon-3.svg" alt="info-icon">
        </div>
      <div class="f-text">
        <h4>Game Development</h4>
        <p>Lorem ipsum dolor sit.</p>
        <a href ="#" class="main-btn">Check</a>
      </div>
      </div>

    </div>
  </section>

  <section class="about">
    <div class="about-img">
      <img src="img/about.png">
    </div>
    <div class="about-text">
      <h2>Track your Statistics</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi iste nobis officia repellendus voluptatem, minima aliquid sunt sapiente incidunt molestiae quaerat nam quae? Minus quod similique sapiente inventore voluptate accusantium.</p>
      <button class="main-btn">More Info</button>
    </div>
  </section>

  <section class="contact">
    <div class="contact-heading">
      <h1>Contact Us</h1>
      <p>Lorem ipsum dolor, sit amet consectetur elit.</p>
    </div>
    <form action="userinformation.php" method="post">
      <input type="text" name="user" placeholder="Full Name"/>
      <input type="email" name="email" placeholder="E-mail"/>
      <textarea name="message" placeholder="Type your Message here..."></textarea>
      <button class="main-btn contact-btn" type="submit">Continue</button>
    </form>
  </section>  
</body>
</html>

