<!-- ================= Rooms Page (rooms.php) ================= -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Rooms - Martins Inc.</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f9f9f9;
      margin: 0;
      padding: 20px;
    }

    h2 {
      text-align: center;
      color: #2c3e50;
    }

    
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
    #slideshow {
      width: 600px;
      height: 400px;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    #slideshow img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 10px;
    }
    .rooms-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }

    .room-card {
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      width: 300px;
      overflow: hidden;
    }

    .room-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .room-info {
      padding: 15px;
    }

    .room-info h3 {
      margin: 0;
      color: #34495e;
    }

    .room-info ul {
      list-style: none;
      padding: 0;
    }

    .room-info li {
      font-size: 14px;
      margin: 5px 0;
      color: #555;
    }

    .price {
      font-weight: bold;
      color: #27ae60;
      margin-top: 10px;
    }

    button {
      background-color: #27ae60;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 10px;
    }

    button:hover {
      background-color: #219150;
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

  <h2>Our Rooms</h2>

  <div class="rooms-container">
    <!-- Room 1: Standard -->
    <div class="room-card">
     <div class="slideshow">
        <img id="standardImage" src="images/standard1.jpg" alt="Standard Room">
      </div>
      <div class="room-info">
        <h3>Standard Room</h3>
        <p>Comfortable room with basic amenities, ideal for short stays.</p>
        <ul>
          <li>🛏️ 1 Queen Bed</li>
          <li>📶 Free WiFi</li>
          <li>🍽️ Complimentary breakfast</li>
          <li>🚿 Ensuite bathroom</li>
        </ul>
        <p class="price">₦25,000 per night</p>
        <a href="booking.php"><button>Book Now</button></a>
      </div>
    </div>

    <!-- Room 2: Deluxe -->
    <div class="room-card">
      <div class="slideshow">
        <img id="deluxeImage" src="images/deluxe1.jpg" alt="Deluxe Room">
      </div>
      <div class="room-info">
        <h3>Deluxe Room</h3>
        <p>Spacious room with added comfort and a private balcony view.</p>
        <ul>
          <li>🛏️ 1 King Bed</li>
          <li>📺 32" Flat TV</li>
          <li>🧴 Toiletries provided</li>
          <li>🪟 Balcony access</li>
        </ul>
        <p class="price">₦45,000 per night</p>
        <a href="booking.php"><button>Book Now</button></a>
      </div>
    </div>

    <!-- Room 3: Suite -->
    <div class="room-card">
      <div class="slideshow">
        <img id="suiteImage" src="images/suite1.jpg" alt="Suite Room">
      </div>
      <div class="room-info">
        <h3>Suite</h3>
        <p>Top-tier suite with lounge area, workspace, and luxury comfort.</p>
        <ul>
          <li>🛏️ King Bed + Lounge</li>
          <li>🛁 Jacuzzi bath</li>
          <li>🧑‍💼 Work desk</li>
          <li>🛎️ 24/7 Room Service</li>
        </ul>
        <p class="price">₦70,000 per night</p>
        <a href="booking.php"><button>Book Now</button></a>
      </div>
    </div>
  </div>
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
  <script>
    // === Image Arrays ===
    const standardImages = [
      "images/standard1.jpg",
      "images/standard2.jpg",
      "images/standard3.jpg",
      "images/standard4.jpg",

    ];

    const deluxeImages = [
      "images/deluxe1.jpg",
      "images/deluxe2.jpg",
      "images/deluxe3.jpg",
      "images/deluxe4.jpg",
    ];

    const suiteImages = [
      "images/suite1.jpg",
      "images/suite2.jpg",
      "images/suite3.jpg",
      "images/suite4.jpg",
    ];

    // === Index Trackers ===
    let stdIndex = 0;
    let delIndex = 0;
    let suiteIndex = 0;

    // === Loop Functions ===
    function loopStandard() {
      const stdImg = document.getElementById("standardImage");
      stdIndex = (stdIndex + 1) % standardImages.length;
      stdImg.src = standardImages[stdIndex];
    }

    function loopDeluxe() {
      const delImg = document.getElementById("deluxeImage");
      delIndex = (delIndex + 1) % deluxeImages.length;
      delImg.src = deluxeImages[delIndex];
    }

    function loopSuite() {
      const suiteImg = document.getElementById("suiteImage");
      suiteIndex = (suiteIndex + 1) % suiteImages.length;
      suiteImg.src = suiteImages[suiteIndex];
    }

    // === Start the slideshows every 3 seconds ===
    setInterval(loopStandard, 3000);
    setInterval(loopDeluxe, 3000);
    setInterval(loopSuite, 3000);
  </script>
</body>
</html>