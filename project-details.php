<?php
session_start();
$pageTitle = "Project Details Page";

require 'inc/header.inc.php';
require 'inc/db_connect.inc.php';

// Get the project ID from the URL
$project_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($project_id > 0) {
    // Query to fetch project data along with technologies for the specific project
    $sql = "
    SELECT p.id, p.title, p.image, p.description, p.work_details, GROUP_CONCAT(t.name ORDER BY t.name ASC SEPARATOR ', ') as technologies
    FROM projects p
    LEFT JOIN project_technologies pt ON p.id = pt.project_id
    LEFT JOIN technologies t ON pt.technology_id = t.id
    WHERE p.id = ?
    GROUP BY p.id
    ";

    // Prepare and execute the statement
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $project_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Output data of the row
            while ($row = $result->fetch_object()) {
?>
                <div class="container my-5">
                    <div class="card mb-4">
                        <img src="<?php echo htmlspecialchars($row->image); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($row->title); ?>">
                        <div class="card-body">
                            <h2 class="card-title"><?php echo htmlspecialchars($row->title); ?></h2>
                            <p class="card-text"><?php echo htmlspecialchars($row->description); ?></p>
                            <div class="mb-3">
                                <h5 class="card-subtitle mb-2">Technologies Used:</h5>
                                <p class="card-text"><?php echo htmlspecialchars($row->technologies); ?></p>
                            </div>
                            <h5 class="card-subtitle mb-2">Work Details:</h5>
                            <p class="card-text"><?php echo htmlspecialchars($row->work_details); ?></p>
                        </div>
                    </div>
                </div>
<?php
            }
        } else {
            echo "<p>No project details found.</p>";
        }
        $stmt->close();
    } else {
        echo "<p>Error preparing statement.</p>";
    }
} else {
    echo "<p>Invalid project ID.</p>";
}

$conn->close();
?>

<?php
require 'inc/footer.inc.php';
?>