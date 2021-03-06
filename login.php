<?php
include "header.php";
?>
<style>
    <?php include "css/style.css"; ?><?php include "css/reset.css"; ?>
</style>

<div class="container border border-secondary rounded  w-50 p-3 my-3">
    <h2 class="mt-3">Log In</h2>
    <form action="includes/login.inc.php" method="post">

        <label for="uid" class="form-label">Enter Username or Email</label>
        <input class="form-control" type="text" name="uid" placeholder="Username/Email...">

        <label for="pwd" class="form-label">Enter Password</label>
        <input class="form-control" type="password" name="pwd" placeholder="Password...">

        <button class="btn btn-primary mt-2" type="submit" name="submit">Log In</button>
    </form>
    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields!</p>";
        } if ($_GET["error"] == "wronglogin") {
            echo "<p>Incorrect login information!</p>";
        }
    }
    ?>

</div>

<?php
include 'footer.php';
?>