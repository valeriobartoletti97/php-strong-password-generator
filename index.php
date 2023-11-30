<?php 

include __DIR__ . '/partials/header.php';
if(isset($_SESSION["password"])){
    header('Location: success.php');
    die();
}
?>
        <main class="px-3 py-4">
            <?php if(isset($_GET["password"]) && $generatedPassword != 'Error') { ?>
                <h4 class="mb-3 p-3 bg-success text-center"> La tua password &egrave;: <?php echo $generatedPassword?></h4>
                <?php } ?>
            <?php if(isset($_GET["password"]) && $generatedPassword === 'Error') { ?>
                <h4 class="mb-3 p-3 bg-danger text-center"> Riprova!!</h4>
            <?php } ?>
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET" class="py-4 px-3">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <label for="password">Lunghezza password:</label>
                    <input type="number" class="form-control" name="password" id="password" min="3" max="15">
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