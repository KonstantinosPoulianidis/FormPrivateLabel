<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Ορίζουμε το επιθυμητό όνομα χρήστη και κωδικό πρόσβασης
    $desiredUsername = "fable";
    $desiredPassword = "fostir1992";

    if ($username == $desiredUsername && $password == $desiredPassword) {
        // Αν η είσοδος είναι επιτυχής, ανακατεύθυνση στη σελίδα του YouTube
        header("Location: https://konstantinospoulianidis.github.io/FormPrivateLabel/");
        exit();
    } else {
        echo "Λανθασμένο όνομα χρήστη ή κωδικός πρόσβασης.";
    }
}
?>
