<?php
session_start();
$pageTitle = "Contact Page";
?>
<?php require 'inc/header.inc.php'; ?>

<div class="form-container flex-grow-1 d-flex align-items-center justify-content-center">
    <section id="contact-form" class="my-4 p-4 border rounded bg-light shadow">
        <h2 class="text-center mb-4">Contact Me</h2>
        <form action="submit.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message:</label>
                <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </section>
</div>

<?php require 'inc/footer.inc.php'; ?>