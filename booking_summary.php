<?php
// booking_summary.php - Display booking info from session
session_start();

if (!isset($_SESSION['booking'])) {
  echo "<h3>No booking found. Please book a room first.</h3>";
  echo "<a href='booking.php'>Go to Booking Page</a>";
  exit;
}

$booking = $_SESSION['booking'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Booking Summary - Martins Inc.</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f7f7f7;
      padding: 30px;
      text-align: center;
    }
    .summary-box {
      background: #fff;
      padding: 20px;
      margin: auto;
      max-width: 400px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      border-radius: 10px;
    }
    h2 {
      color: #2c3e50;
    }
    p {
      font-size: 16px;
      color: #444;
    }
    .home-link, .print-btn {
      margin-top: 20px;
      display: inline-block;
      padding: 10px 20px;
      background-color: #2c3e50;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      margin-right: 10px;
    }
    .home-link:hover, .print-btn:hover {
      background-color: #2c3e50;
    }
    img.room-preview {
      width: 100%;
      border-radius: 10px;
      margin-top: 15px;
    }
  </style>
</head>
<body>
  <div class="summary-box">
    <h2>Booking Confirmed!</h2>
    <p><strong>Name:</strong> <?= htmlspecialchars($booking['name']) ?></p>
    <p><strong>Email:</strong> <?= htmlspecialchars($booking['email']) ?></p>
    <p><strong>Room:</strong> <?= htmlspecialchars($booking['room']) ?></p>
    <p><strong>Check-in:</strong> <?= htmlspecialchars($booking['checkin']) ?></p>
    <p><strong>Check-out:</strong> <?= htmlspecialchars($booking['checkout']) ?></p>

    <!-- Display room image based on room type -->
    <?php
      $roomImages = [
        'Standard' => 'images/standard1.jpg',
        'Deluxe' => 'images/deluxe2.jpg',
        'Suite' => 'images/suite3.jpg'
      ];
      $imagePath = $roomImages[$booking['room']] ?? 'images/default-room.jpg';
    ?>
    <img src="<?= $imagePath ?>" alt="Room Image" class="room-preview">

    <!-- Buttons -->
    <a class="home-link" href="index.php">Return to Home</a>
    <a class="print-btn" href="#" onclick="window.print()">Print Booking</a>
  </div>
</body>
</html>

<?php
// Clear session after displaying
unset($_SESSION['booking']);
?>