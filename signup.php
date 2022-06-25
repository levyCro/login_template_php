<?php
include "header.php";
?>
<style>
<?php include "css/style.css"; ?>
<?php include "css/reset.css"; ?>
</style>

<div class="container border border-secondary rounded  w-50 p-3 my-3">
    <h2 class="mt-3">Sign Up</h2>
    <form action="includes/signup.inc.php" method="post">
        <label for="name" class="form-label">Enter Full Name</label>
        <input class="form-control" type="text" name="name" placeholder="Fulle Name...">

        <label for="email" class="form-label">Enter Email</label>
        <input class="form-control" type="text" name="email" placeholder="Email...">

        <label for="uid" class="form-label">Enter Username</label>
        <input class="form-control" type="text" name="uid" placeholder="Username...">

        <label for="pwd" class="form-label">Enter Password</label>
        <input class="form-control" type="password" name="pwd" placeholder="Password...">

        <label for="pwdRepeat" class="form-label">Repeat Password</label>
        <input class="form-control" type="password" name="pwdRepeat" placeholder="Repeat password...">

        <button class="btn btn-primary mt-2"type="submit" name="submit">Sign Up</button>
    </form>
 
</div>

<?php
include 'footer.php';
?>