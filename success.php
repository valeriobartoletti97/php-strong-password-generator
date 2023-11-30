<?php 
session_start();

if(empty($_SESSION["password"])){
    header('Location: index.php');
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Password Generator</title>
</head>
<body>
    <div class="contaniner vh-100 d-flex justify-content-center align-items-center bg-success flex-column">
        <h2 class="mb-3">La tua password &egrave;: <?php echo $_SESSION["password"]?></h2>
        <button class="btn btn-danger">
            <a class="text-uppercase" href="logout.php">Logout</a>
        </button>
    </div>
</body>
</html>