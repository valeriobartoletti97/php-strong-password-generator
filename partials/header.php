<?php
session_start();
include __DIR__ . '/../functions/functions.php';
$generatedPassword = generatePassword();
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
    <div class="container">
        <header class=text-center>
            <h1 class="mt-5 mb-3">Strong Password Generator</h1>
            <h2>Genera una password sicura</h2>
        </header>