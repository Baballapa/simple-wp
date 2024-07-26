<?php
session_start();
$pageTitle = "Contact Page";

?>
<?php require 'inc/header.inc.php' ?>



<section id="contact-form">
    <form action="submit.php" method="POST">

        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Please First Name">

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Please enter Last Name">

        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Please enter Email">

        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="How can I help you" style="height:200px"></textarea>

        <input type="submit" value="Submit">
    </form>
</section>


<?php require 'inc/footer.inc.php' ?>