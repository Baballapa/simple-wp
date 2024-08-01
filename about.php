<?php
session_start();
$pageTitle = "About Page";
?>

<?php require 'inc/header.inc.php'; ?>

<section class="about-section container my-5">
    <div class="row justify-content-center text-center text-lg-left">
        <div class="col-12 col-lg-4 mb-4 mb-lg-0 d-flex justify-content-center">
            <div class="personal-image">
                <img id="bridge-pose" src="img/aboutme2-img.jpeg" class="img-fluid" alt="Me posing on a bridge">
            </div>
        </div>
        <div class="col-12 col-lg-8 d-flex flex-column justify-content-center">
            <h1 class="my-3"><u>About Me</u></h1>
            <p>My name is John Doe and I am a web developer. I have been working in the field for over 10 years. I have a passion for creating websites and web applications. I love to learn new technologies and keep up with the latest trends in web development. I am always looking for new challenges and opportunities to grow as a developer. I am currently working as a freelance developer and I am always looking for new projects to work on. If you have a project that you would like me to work on, please feel free to contact me. I would love to hear from you!</p>
        </div>
    </div>
</section>



<?php require 'inc/footer.inc.php'; ?>