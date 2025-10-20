<?php
$input = file_get_contents('php://input');

$data = json_decode($input, true);

$username = $data['username'] ?? 'Guest';

$response = array(
    "status" => "success",
    "message" => "Welcome, " . htmlspecialchars($username) . "!"
);

header('Content-Type: application/json');

echo json_encode($response);
?>
