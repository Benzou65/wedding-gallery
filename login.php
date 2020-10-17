<?php
$errorMsg = "";
if (!empty($_GET['error'])) {
    if (isset($_GET['error'])) {
        $errorMsg = $_GET['error'];
    }
}
?>
<form action="checkConnect.php" method="post" class="container-fluid width-form  p-3 mb-5">
    <div class="form-group">
        <input type="password" class="form-control" name="password" required placeholder="Mot de passe">
    </div>
    <button type="submit" class="btn btn-dark">Connexion</button>
    <?php
    if (!empty($errorMsg)) {
        echo "<div class='alert alert-danger mt-3' role='alert'>" . $errorMsg . "</div>";
    } ?>
</form>