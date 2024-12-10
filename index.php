<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>URL Short</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <!-- Container -->
  <div class="container d-flex flex-column justify-content-center align-items-center vh-100">
    <!-- Header -->
    <h1 class="text-center mb-4 fw-bold">URL Short</h1>
    <!-- Form -->


    
    <?php
      if(isset($_GET["error"])){
        if($_GET["error"] == 1){
          echo "<h3 class='text-center mb-4 fw-bold'>No parameter set!</h3>";
        }
        if ($_GET["error"] == 2) {
          echo "<h3 class='text-center mb-4 fw-bold'>There was an error redirecting you!</h3>";
        }
      }
    ?>



    <form class="w-50" action="r.php" method="post">
      <div class="mb-3">
        <label for="userInput" class="form-label">URL you want to short</label>
        <input type="url" class="form-control" name="url" id="userInput" placeholder="URL">
      </div>
      <button type="submit" class="btn btn-primary w-100">Submit</button>
    </form>
  </div>

  <!-- Bootstrap JS (Optional) -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
