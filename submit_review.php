<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['author_name'] ?? '');
    $role = trim($_POST['author_role'] ?? '');
    $text = trim($_POST['review_text'] ?? '');
    $rating = (int)($_POST['rating'] ?? 5);

    if ($name === '' || $text === '') {
        echo json_encode(['success' => false, 'message' => 'Missing required fields.']);
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO reviews (author_name, author_role, review_text, rating, status) VALUES (?, ?, ?, ?, 'pending')");
    $stmt->bind_param("sssi", $name, $role, $text, $rating);

    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Something went wrong.']);
    }
    $stmt->close();
}
?>