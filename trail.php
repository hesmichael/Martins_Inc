<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Image Slideshow</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #fdfdfd;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 50px;
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

    h2 {
      margin-bottom: 20px;
      color: #2c3e50;
    }
  </style>
</head>
<body>

  <h2>Standard Room Slideshow</h2>

  <div id="slideshow">
    <img id="roomImage" src="images/standard1.jpg" alt="Room Image">
  </div>

  <script>
    // Array of image paths
    const images = [
      "images/standard1.jpg",
      "images/standard2.jpg",
      "images/standard3.jpg",
      "images/standard4.jpg",
      "images/standard5.jpg",
      "images/standard6.jpg"
    ];

    let currentIndex = 0; // Start at the first image

    // Function to loop through images
    function loopImages() {
      const imgElement = document.getElementById("roomImage");

      // Move to next image, loop back to first if needed
      currentIndex = (currentIndex + 1) % images.length;

      // Change the image
      imgElement.src = images[currentIndex];
    }

    // Call loopImages every 3 seconds
    setInterval(loopImages, 3000);
  </script>

</body>
</html>
