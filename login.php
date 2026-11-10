
<?php include 'header.inc'; ?>

<main>
    <h2>Login Page</h2>

    <?php
    if (isset($_GET['error'])) {
        echo "<p style='color: red;'>Invalid username or password. Please try again.</p>";
    }
    ?>

    <form action="process.php" method="POST">

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <br><br>

        <input type="hidden" name="token" value="T106194433">

        <input type="submit" value="Login">

    </form>
</main>

<?php include 'footer.inc'; ?>
