<?php
session_start();
$pageTitle = "Contact Page";
?>
<?php require 'inc/header.inc.php'; ?>

<div class="form-container">
    <form id="fs-frm" name="simple-contact-form" accept-charset="utf-8" action="https://formspree.io/f/xyzgoeer" method="post">
        <fieldset id="fs-frm-inputs">
            <label for="full-name">Full Name</label>
            <input type="text" name="name" id="full-name" placeholder="Full Name" class="form-control" required="">
            <label for="email-address">Email Address</label>
            <input type="email" name="_replyto" id="email-address" placeholder="email@domain.tld" class="form-control" required="">
            <label for="message">Message</label>
            <textarea rows="5" name="message" id="message" placeholder="Please let me know how I can help you today!" class="form-control" required=""></textarea>
            <input type="hidden" name="_subject" id="email-subject" value="Contact Form Submission">
        </fieldset>
        <input type="submit" value="Submit">
    </form>
</div>
<style>
    /* General Form Styling */
    form {
        background-color: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 600px;
        width: 100%;
        margin: 50px auto;
        text-align: left;
        font-family: "Arial", Helvetica, sans-serif;
        color: #555;
    }

    form label {
        font-weight: bold;
        margin-bottom: 8px;
        display: block;
        color: #0d2035;
    }

    form .form-control {
        border: 1px solid #ccc;
        border-radius: 4px;
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        padding: 12px;
        font-size: 16px;
        width: 100%;
        background-color: #ffffff;
        /* White background for inputs */
    }

    form .form-control:focus {
        border-color: #b88e26;
        /* Matches the color theme */
        box-shadow: 0 0 5px rgba(184, 142, 38, 0.5);
    }

    form textarea.form-control {
        resize: vertical;
        height: 150px;
        /* Ensures textarea has a good height */
    }

    form input[type="submit"] {
        background-color: #d49923;
        /* Matches your button color theme */
        color: #fff;
        border: none;
        padding: 14px 24px;
        font-size: 16px;
        cursor: pointer;
        border-radius: 4px;
        transition: background-color 0.3s;
        width: 100%;
        text-align: center;
    }

    form input[type="submit"]:hover {
        background-color: #a77a1e;
    }
</style>


<script src="script.js"></script>

<?php require 'inc/footer.inc.php'; ?>