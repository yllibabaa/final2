<?php
include_once('header.php');

?>

<div class="signup">
    <form action="register.php" class="form-signin" method="post">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

        <label for="inputEmail" class="sr=only">Name</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Name" name="name" required>

        <label for="inputEmail" class="sr=only">Surname</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Surname" name="surname">

        <label for="inputEmail" class="sr=only">Username</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Username" name="username">

        <label for="inputEmail" class="sr=only">Email</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email">

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign In</button>

        <small>Already have an account? <a href="login.php">Log in</a></small>

        <p class="mt-5 mb-3 text-muted">Digital School &copy; 2024</p>

    </form>
</div>

<?php include('footer.php')?>