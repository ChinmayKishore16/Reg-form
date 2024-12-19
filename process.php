<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "<div style='font-family:Trebuchet MS, sans-serif; background-color:#2d2d4c; color:white; padding:20px; border-radius:10px; width:60%; margin:auto;'>\n";
    echo "<h1>Form Submission Details</h1>\n";
    echo "<p><strong>Name:</strong> " . htmlspecialchars($_POST['name']) . "</p>\n";
    echo "<p><strong>Email:</strong> " . htmlspecialchars($_POST['email']) . "</p>\n";
    echo "<p><strong>Phone:</strong> " . htmlspecialchars($_POST['phone']) . "</p>\n";
    echo "<p><strong>Gender:</strong> " . htmlspecialchars($_POST['gender']) . "</p>\n";
    echo "<p><strong>Address:</strong> " . nl2br(htmlspecialchars($_POST['address'])) . "</p>\n";
    echo "</div>";
}
?>
