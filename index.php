<?php
session_start();
$pageTitle = "Home Page";
?>

<?php require 'inc/header.inc.php'; ?>

<section class="intro-section container my-5">
    <div class="row">
        <div class="col-12 text-center">
            <div class="intro-content">
                <h2>Welcome to My Portfolio!</h2>
                <p>Hi there! I'm a budding web developer passionate about creating clean and effective solutions. I’m currently building my skills and diving into exciting projects. My goal is to turn ideas into reality with well-designed, user-friendly websites and applications. Take a look at my work below to see what I’ve been up to. I’m eager to learn and grow, and I hope you enjoy exploring my projects!</p>
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelector('.intro-section').classList.add('show');
    });
</script>


<?php require 'inc/project-card.inc.php' ?>

<?php require 'inc/footer.inc.php'; ?>