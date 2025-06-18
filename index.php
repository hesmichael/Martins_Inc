<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Set the character encoding and make the site responsive on all devices -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Martins Inc. Hotel</title>

  <!-- Internal CSS for basic styling -->
  <style>
    /* Body style - set background and text color */
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      color: #333;
      height: 100%;
      display: flex;
      flex-direction: column;
    }

    main {
      flex: 1;
        }
    /* Header bar style */
    header {
      background-color: #2c3e50; /* dark blue background */
      color: white;
      padding: 15px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    /* Container for logo and hotel name */
    .logo-container {
      display: flex;
      align-items: center;
    }

    /* Optional styling for logo image */
    .logo-container img {
      height: 40px; /* adjust the height as needed */
      margin-right: 10px; /* spacing between logo and text */
    }

    /* Navigation link style */
   
    nav {
      background-color: #2c3e50;
      padding: 15px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }

    nav .menu-toggle {
      display: none;
      font-size: 24px;
      color: white;
      background: none;
      border: none;
      cursor: pointer;
    }

    nav .links {
      display: flex;
      flex-wrap: wrap;
    }

    nav a {
      color: white;
      text-decoration: none;
      margin: 0 10px;
      font-weight: bold;
    }

    nav a:hover {
      text-decoration: underline;
    }

    @media (max-width: 600px) {
      nav .links {
        width: 100%;
        display: none;
        flex-direction: column;
        margin-top: 10px;
      }

      nav .links.show {
        display: flex;
      }

      nav .menu-toggle {
        display: block;
      }
    }

    /* Hero section - large intro text */
    .hero {
      background-color: #34495e; /* slightly lighter blue */
      color: white;
      text-align: center;
      padding: 80px 20px; /* top and bottom space */
    }

    /* Content section style */
    .about, .rooms, footer {
      padding: 20px;
      text-align: center;
    }

    /* Layout for room cards using grid */
    .rooms-grid {
      display: flex;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); /* responsive layout */
      gap: 15px;
      margin-top: 20px;
      width: 100%;
      height: 450px;
      border-radius: 10px;
    }
    .room img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 10px;
    }

    /* Single room card style */
    .room {
      background-color: white; /* white background for card */
      padding: 10px;
      border-radius: 5px; /* rounded corners */
      box-shadow: 0 0 5px rgba(0,0,0,0.1); /* light shadow */
    }

    /* Remove top margin from room title */
    .room h3 {
      margin-top: 0;
    }

    /* Highlight price in orange */
    .price {
      color: #e67e22;
      font-weight: bold;
    }

    /* Footer bar style */
    footer {
      background-color: #2c3e50; /* same as header */
      color: white;
      /* margin-top: 20px; */
    }
    @media (max-width: 600px) {
  .rooms-container {
    flex-direction: column;
    align-items: center;
  }
}
  </style>
</head>

<body>
  <!-- Header section with logo, site name and nav links -->
  <header>
    <!-- Logo and title container -->
    <div class="logo-container">
      <!-- PLACE YOUR LOGO IMAGE HERE -->
      <img src="hotel logo.png" alt="Hotel Logo">
      <h2>Martins Inc.</h2>
    </div>

    <!-- Navigation menu -->
    <body>
  <nav>
    <div><a href="index.php">Home.</a></div>
    <button class="menu-toggle" onclick="toggleMenu()">☰</button>
    <div class="links" id="navLinks">
      <a href="about.php">About</a>
      <a href="rooms.php">Rooms</a>
      <a href="booking.php">Booking</a>
      <a href="contact.php">Contact</a>
    </div>
  </nav>
  </header>
<main>
  <!-- Big welcome section with message -->
  <section class="hero">
    <h1>Comfort... Luxury... And First-Class Services</h1>
  </section>

  <!-- About section -->
  <section id="about" class="about">
    <h2>About Us</h2>
    <p>Welcome to Martins Inc. — your place for a comfortable and luxurious stay in Nigeria.</p>
  </section>

  <!-- Room listings section -->
  <section id="rooms" class="rooms">
    <h2>Our Rooms</h2>

    <!-- Grid layout for all room cards -->
    <div class="rooms-grid">
      <!-- Standard Room card -->
      <div class="room">
        <a href="rooms.php"><img src="images/standard1.jpg" alt="">
        <h3>Standard Room</h3>
         </a>
        <p>Basic and affordable room with all essentials.</p>
        <p class="price">₦25,000 / night</p>
      </div>

      <!-- Deluxe Room card -->
      <div class="room">
       <a href="rooms.php"><img src="images/deluxe1.jpg" alt="">
        <h3 style="color: black; text-decoration:none;">Deluxe Room</h3>
         </a>
        <p>Spacious and comfortable room for longer stays.</p>
        <p class="price">₦40,000 / night</p>
      </div>

      <!-- Suite Room card -->
      <div class="room">
       <a href="rooms.php"><img src="images/suite3.jpg" alt="">
        <h3>Suite</h3>
         </a>
        <p>Luxury room with extra space and features.</p>
        <p class="price">₦70,000 / night</p>
      </div>
    </div>
  </section>
</main>
  <!-- Footer section -->
  <footer>
    <p> &copy; 2025 Martins Inc. All rights reserved.</p>
  </footer>
  <script>
    function toggleMenu() {
      const links = document.getElementById('navLinks');
      links.classList.toggle('show');
    }
  </script>
</body>
</html>