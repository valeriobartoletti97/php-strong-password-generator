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
        <main class="px-3 py-4">
            <form action="index.php" method="GET" class="py-4 px-3">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <label for="password">Lunghezza password:</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-primary text-uppercase me-2">Invia</button>
                    <button type="reset" class="btn btn-warning text-uppercase">Annulla</button>
                </div>
            </form>
        </main>
    </div>
</body>
</html>