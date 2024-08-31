<?php
// Connect to the database
$id = $_GET['id'];
$query = "SELECT * FROM projects WHERE id = ?";
$stmt = $pdo->prepare($query);
$stmt->execute([$id]);
$project = $stmt->fetch();
