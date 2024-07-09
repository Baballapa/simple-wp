<?php
session_start();
$pageTitle = "Contact Page";

?>
<?php require 'inc/header.inc.php' ?>



<section id="contact-form">
    <form action="submit.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit">Submit</button>
    </form>
</section>


<?php require 'inc/footer.inc.php' ?>