<?php
session_start();
$pageTitle = "Contact Page";

?>
<?php require 'inc/header.inc.php' ?>



<section id="contact-form">
    <form action="send-email.php" method="POST">

        <label for="name">First Name</label>
        <input type="text" id="name" name="name" placeholder="Please enter Name" required>

        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Please enter Email" required>

        <label for="subject">Subject</label>
        <input type="text" id="subject" name="Subject" placeholder="Please enter Subject" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" placeholder="How can I help you" required></textarea>

        <input type="submit" value="Submit">
    </form>
</section>


<?php require 'inc/footer.inc.php' ?>