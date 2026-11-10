<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

$username = htmlspecialchars($_SESSION['user']);
?>

<?php include 'header.inc'; ?>

<main>
    <h2>Welcome Page</h2>

    <p>Welcome, <?php echo $username; ?>!</p>

    <p>You have successfully logged in.</p>
</main>

<?php include 'footer.inc'; ?>