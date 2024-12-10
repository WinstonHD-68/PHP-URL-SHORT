<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Succesfully shorted</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <!-- Container -->
  <div class="container d-flex flex-column align-items-center vh-100">
    <!-- Header -->
    <h1 class="text-center mb-4 fw-bold mt-4">Succesfully shorted</h1>
    <!-- PHP Content Section -->
    <div class="w-50 mt-4">
        <?php      
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            require "classes/class.php";
            $url = $_POST["url"];
            $short = new short($url);
            echo "<div id='url' class='alert alert-success'>New link is: localhost/r?a=" . $short->url_short() . "</div>";
        }
        ?>
    <!-- Back Button -->
    <a href="/" class="btn btn-secondary mt-4">Go Back</a>
  </div>
  <!-- Bootstrap JS (Optional) -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>