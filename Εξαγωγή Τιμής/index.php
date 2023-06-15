<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Ορίζουμε το επιθυμητό όνομα χρήστη και κωδικό πρόσβασης
    $desiredUsername = "fable";
    $desiredPassword = "fostir1992";

    if ($username == $desiredUsername && $password == $desiredPassword) {
        // Αν η είσοδος είναι επιτυχής, ανακατεύθυνση στη σελίδα του YouTube
        header("Location: http://127.0.0.1:5500/%CE%9A%CE%95%CE%9D%CE%A4%CE%A1%CE%99%CE%9A%CE%97%20%CE%A3%CE%95%CE%9B%CE%99%CE%94%CE%91/%CE%95%CE%BE%CE%B1%CE%B3%CF%89%CE%B3%CE%AE%20%CE%A4%CE%B9%CE%BC%CE%AE%CF%82/%CE%95%CE%AF%CF%83%CE%BF%CE%B4%CE%BF%CF%82%20%CF%83%CF%84%CE%B7%20%CF%83%CE%B5%CE%BB%CE%AF%CE%B4%CE%B1/index2.html");
        exit();
    } else {
        echo "Λανθασμένο όνομα χρήστη ή κωδικός πρόσβασης.";
    }
}
?>
