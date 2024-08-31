<?php
session_start();
$pageTitle = "Home Page";

// Database connection
require 'inc/db_connect.inc.php';

// Query to get projects
$sql = "SELECT id, title, description, image, project_link, github_link FROM projects";
$result = $conn->query($sql);
?>

<?php require 'inc/header.inc.php'; ?>

<section class="about-section container">
    <div class="row justify-content-center text-lg-left">
        <div class="col-12 col-lg-4 mb-4 mb-lg-0 d-flex justify-content-center">
            <div class="personal-image">
                <img id="bridge-pose" src="img/aboutme2-img.jpeg" class="img-fluid" alt="Me posing on a bridge">
            </div>
        </div>
        <div class="col-10 col-lg-6 d-flex flex-column justify-content-center">
            <h1 class="my-3">About Me</h1>
            <p>My name is John Doe and I am a web developer. I have been working in the field for over 10 years. I have a passion for creating websites and web applications. I love to learn new technologies and keep up with the latest trends in web development. I am always looking for new challenges and opportunities to grow as a developer. I am currently working as a freelance developer and I am always looking for new projects to work on. If you have a project that you would like me to work on, please feel free to contact me. I would love to hear from you!</p>
        </div>
    </div>
</section>

<section class="container">
    <div class="row">
        <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_object()): ?>
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="details-container">
                        <div class="article-container">
                            <img src="<?php echo htmlspecialchars($row->image); ?>" alt="<?php echo htmlspecialchars($row->title); ?>" class="project-img">
                        </div>
                        <h2 class="project-title"><?php echo htmlspecialchars($row->title); ?></h2>
                        <p class="project-description"><?php echo htmlspecialchars($row->description); ?></p>
                        <div class="btn-container">
                            <a href="<?php echo htmlspecialchars($row->github_link); ?>" class="project-btn" target="_blank">GitHub</a>
                            <a href="project-details.php?id=<?php echo htmlspecialchars($row->id); ?>" class="project-btn">Details</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>No projects found.</p>
        <?php endif; ?>
    </div>
</section>

<?php require 'inc/footer.inc.php'; ?>

<?php
// Close the database connection
$conn->close();
?>