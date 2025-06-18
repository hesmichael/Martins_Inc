<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - Martins Inc.</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #ecf0f1;
      margin: 0;
      padding: 20px;
    }

    h2 {
      text-align: center;
      color: #2c3e50;
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

    form {
      max-width: 500px;
      margin: 0 auto;
      background-color: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    label {
      display: block;
      margin-top: 15px;
    }

    input, textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      margin-top: 20px;
      background-color: #2c3e50;
      color: white;
      padding: 10px;
      width: 100%;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #1a252f;
    }
    @media (max-width: 600px) {
  .rooms-container {
    flex-direction: column;
    align-items: center;
  }
}

footer {
      background-color: #2c3e50; /* same as header */
      color: white;
      text-align: center;
      padding: 15px;
      margin-top: 40px;
    }
  </style>
</head>
<body>

  <body>
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
  <h2>Contact Martins Inc.</h2>

  <!-- Contact form -->
  <form action="submit_contact.php" method="POST">
    <!-- Full name field -->
    <label for="name">Your Name:</label>
    <input type="text" id="name" name="name" required>

    <!-- Email field -->
    <label for="email">Your Email:</label>
    <input type="email" id="email" name="email" required>

    <!-- Message field -->
    <label for="message">Your Message:</label>
    <textarea id="message" name="message" rows="5" required></textarea>

    <!-- Submit button -->
    <button type="submit">Send Message</button>
  </form>
  <script>
    function toggleMenu() {
      const links = document.getElementById('navLinks');
      links.classList.toggle('show');
    }
  </script>
  <!-- Footer section -->
  <footer>
    <p>&copy; 2025 Martins Inc. All rights reserved.</p>
  </footer>
</body>
</html>
