<?php
// Start the session
// session_start();
// unset($_SESSION['language']);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the selected language from the form
    $selectedLanguage = $_POST["language"];

    // Store the selected language in a session variable
    $_SESSION["language"] = $selectedLanguage;

    // Redirect the user to a different page or perform any other actions
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}
?>
