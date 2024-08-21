<?php
session_start();
$pageTitle = "Contact Page";
?>
<?php require 'inc/header.inc.php'; ?>
<?php require 'inc/message.inc.php'; ?>

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="wrapper p-4 shadow-lg rounded bg-white">
        <header class="mb-3 text-center">Send us a Message</header>
        <form action="message.php" method="POST">
            <div class="row mb-4">
                <div class="col-md-6 mb-3">
                    <div class="position-relative">
                        <label for="name">Enter Name</label>
                        <input type="text" class="form-control py-3 ps-5" name="name" placeholder="Enter your name" required>
                        <i class='fas fa-user position-absolute top-50 start-0 translate-middle-y ps-3 text-secondary'></i>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="position-relative">
                        <label for="email">Enter Email</label>
                        <input type="text" class="form-control py-3 ps-5" name="email" placeholder="Enter your email" required>
                        <i class='fas fa-envelope position-absolute top-50 start-0 translate-middle-y ps-3 text-secondary'></i>
                    </div>
                </div>
            </div>
            <div class="mb-4 position-relative">
                <label for="message">Enter Message</label>
                <textarea class="form-control" placeholder="Write your message" name="message" rows="6" required></textarea>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <button type="submit" class="btn btn-primary">Send Message</button>
                <span class="d-none"></span>
            </div>
        </form>
    </div>
</div>

<script src="script.js"></script>

<?php require 'inc/footer.inc.php'; ?>