<?php
// Set headers to return JSON
header('Content-Type: application/json');

// Check if the file exists
$file = 'file.json';
if (file_exists($file)) {
    // Read and output the JSON file
    echo file_get_contents($file);
} else {
    // Return error message if the file is missing
    echo json_encode(["error" => "File not found"]);
}
?>
