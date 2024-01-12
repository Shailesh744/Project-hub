<!-- username.php -->
<?php
session_start();

include('db_config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['txt'];
    $email = $_POST['email'];
    $password = $_POST['pswd'];

    $sql = "INSERT INTO userdata (username, email, password) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $password);

    if (mysqli_stmt_execute($stmt)) {
        echo '<script>alert
        ("sign-up successfull");
        window.location="codegenerator.php"</script>';
        
    } else {
        echo "Error: " . mysqli_stmt_error($stmt);
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>
