<!-- <?php 
// // Handle booking form submission from booking.php
// include 'config.php';

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//   // Sanitize user input
//   $full_name = htmlspecialchars($_POST['full_name']);
//   $email = htmlspecialchars($_POST['email']);
//   $checkin = htmlspecialchars($_POST['checkin']);
//   $checkout = htmlspecialchars($_POST['checkout']);
//   $room_type = htmlspecialchars($_POST['room_type']);

//   // Validate required fields
//   if (empty($full_name) || empty($email) || empty($checkin) || empty($checkout) || empty($room_type)) {
//     echo "<h3 style='color:red;'>All fields are required.</h3>";
//     exit;
//   }

//   // Prepare booking info string
//   $booking = "Name: $full_name\nEmail: $email\nRoom Type: $room_type\nCheck-in: $checkin\nCheck-out: $checkout\n---\n";

//   // Save the booking to a file
//   file_put_contents("bookings.txt", $booking, FILE_APPEND);

//   // Success message
//   echo "<h2>Booking Confirmed!</h2>";
//   echo "<p>Thank you <strong>$full_name</strong> for booking a <strong>$room_type</strong> room.</p>";
//   echo "<p>We look forward to seeing you from <strong>$checkin</strong> to <strong>$checkout</strong>.</p>";

// } else {
//   echo "<h3 style='color:red;'>Access Denied: No form submitted.</h3>";
// }
?>-->

<?php
// submit_booking.php - Handles booking, saves to file, MySQL, email, and session

session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Sanitize input
  $full_name = htmlspecialchars($_POST['full_name'] ?? '');
  $email = htmlspecialchars($_POST['email'] ?? '');
  $checkin = htmlspecialchars($_POST['checkin'] ?? '');
  $checkout = htmlspecialchars($_POST['checkout'] ?? '');
  $room_type = htmlspecialchars($_POST['room_type'] ?? '');

  // Validate fields
  if (empty($full_name) || empty($email) || empty($checkin) || empty($checkout) || empty($room_type)) {
    echo "<h3 style='color:red;'>All fields are required.</h3>";
    exit;
  }

  // Save to file
  $bookingData = "Name: $full_name\nEmail: $email\nRoom: $room_type\nCheck-in: $checkin\nCheck-out: $checkout\n---\n";
  file_put_contents("bookings.txt", $bookingData, FILE_APPEND);

  // Save to MySQL
  $stmt = $conn->prepare("INSERT INTO bookings (full_name, email, room_type, checkin, checkout) VALUES (?, ?, ?, ?, ?)");
  $stmt->bind_param("sssss", $full_name, $email, $room_type, $checkin, $checkout);
  $stmt->execute();
  $stmt->close();

  // Send confirmation email
  $to = $email;
  $subject = "Martins Inc. Booking Confirmation";
  $body = "Dear $full_name,\n\nThank you for booking a $room_type at Martins Inc.\nCheck-in: $checkin\nCheck-out: $checkout\n\nWe look forward to your stay.\n\nMartins Inc.";
  $headers = "From: bookings@martinsinc.com"; // Change to real sender
  mail($to, $subject, $body, $headers);

  // Save to session
  $_SESSION['booking'] = [
    'name' => $full_name,
    'email' => $email,
    'room' => $room_type,
    'checkin' => $checkin,
    'checkout' => $checkout
  ];

  // Redirect to summary
  header("Location: booking_summary.php");
  exit;

} else {
  echo "<h3 style='color:red;'>Access Denied: No form submitted.</h3>";
}
?>