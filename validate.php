<!-- validate.php -->
<?php
session_start();

include('db_config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['pswd'];

    $sql = "SELECT * FROM userdata WHERE email=? AND password=?";
    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmt, "ss", $email, $password);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        // echo "Login successful!";
        // You can redirect the user to another page or perform additional actions here
        //here will session created
       $_SESSION['user_name'] = $email;
        echo '<script>alert("login successfull")</script>';
        include('codegenerator.php');
    } else {
        echo "Invalid email or password";
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>
