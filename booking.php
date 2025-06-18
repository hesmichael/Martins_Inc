<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book a Room - Martins Inc.</title>
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

    input, select {
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
  <nav>
    <div><a href="index.php">Martins INC</a></div>
    <button class="menu-toggle" onclick="toggleMenu()">☰</button>
    <div class="links" id="navLinks">
      <a href="about.php">About</a>
      <a href="rooms.php">Rooms</a>
      <a href="booking.php">Booking</a>
      <a href="contact.php">Contact</a>
    </div>
  </nav>
<main>
  <h2>Book a Room at Martins Inc.</h2>

  <!-- Booking form -->
  <form action="submit_booking.php" method="POST">
    <!-- Guest name -->
    <label for="fullname">Full Name:</label>
    <input type="text" id="fullname" name="full_name" placeholder="Your Full Name" required>

    <!-- Guest email -->
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <!-- Room type -->
    <label for="room">Room Type:</label>
    <select id="room" name="room_type">
      <option value="Standard Room">Standard Room</option>
      <option value="Deluxe Room">Deluxe Room</option>
      <option value="Suite">Suite</option>
    </select>

    <!-- Check-in date -->
    <label for="checkin">Check-in Date:</label>
    <input type="date" id="checkin" name="checkin" required>

    <!-- Check-out date -->
    <label for="checkout">Check-out Date:</label>
    <input type="date" id="checkout" name="checkout" required>

    <!-- Submit button -->
    <button type="submit">Confirm Booking</button>
  </form>
  <!-- Footer section -->
   
  <footer>
    <p>&copy; 2025 Martins Inc. All rights reserved.</p>
  </footer>
  <script>
    function toggleMenu() {
      const links = document.getElementById('navLinks');
      links.classList.toggle('show');
    }
  </script>
</body>
</html>
