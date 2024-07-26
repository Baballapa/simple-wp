<?php
session_start();
$pageTitle = "About Page";
?>

<?php require 'inc/header.inc.php' ?>

<body id="about-page">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img id="bridge-pose" src="img/aboutme2-img.jpeg" class="img-fluid" alt="Me posing on a bridge">
            </div>
            <div class="col-md-6 text-align-center justify-content-center">
                <h1>About Me</h1>
                <p>My name is John Doe and I am a web developer. I have been working in the field for over 10 years. I have a passion for creating websites and web applications. I love to learn new technologies and keep up with the latest trends in web development. I am always looking for new challenges and opportunities to grow as a developer. I am currently working as a freelance developer and I am always looking for new projects to work on. If you have a project that you would like me to work on, please feel free to contact me. I would love to hear from you!</p>
                <h2>Check Me Out</h2>
                <div class="about-socials">
                    <a href="https://x.com/ProfMLJ" target="_blank"><img src="img/twitter.png" alt="X Logo"><i class="fab fa-twitter">X</i></a>
                    <a href="https://www.linkedin.com/in/martin-lomeli-jimenez/" target="_blank"><img src="img/linkedin.png" alt="LinkedIn Logo"><i class="fab fa-linkedin-in">Linkedin</i></a>
                    <a href="https://github.com/Baballapa" target="_blank"><img src="img/github.png" alt="Github Logo"><i class="fab fa-github">GitHub</i></a>
                </div>
            </div>
        </div>
    </div>
</body>
<?php require 'inc/footer.inc.php' ?>