<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header("index.php");
}

require 'DATABASE2.php';

$message = '';

if (!empty($_POST['email']) && !empty($_POST['password'])):

    // Enter the new user in the database
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$stmt->bindParam(':password', $password);

    if ($stmt->execute()):
        $message = 'Successfully created new user';
    else:
        $message = 'Sorry there must have been an issue creating your account';
    endif;

endif;
require 'header/header.php';
?>

<body class="body_register">
    <div id="wrapper" class="col-lg-10 col-lg-offset-1">
        <div id="wrap_logo_register">
            <a class="wonder_image_a" href="index.php"><p class="wonder_image_p">IMAGE-BOOK <span class="glyphicon glyphicon-picture"></span></p></a>
        </div>
        <div class="form">

            <ul class="tab-group">
                <li class="tab"><a class="to_login" href="LOGIN2.php">Log In</a></li>
            </ul>



            <?php if (!empty($message)): ?>
                <p><?= $message ?></p>
            <?php endif; ?>

            <h1>Register</h1>

            <form action="REGISTER2.php" method="POST">
                <div class="field-wrap">
                    <input type="text" placeholder="Enter your email" name="email" required>
                </div>
                <div class="field-wrap">
                    <input type="password" placeholder="and password" name="password" required>
                </div>
                <div class="field-wrap">
                    <input type="password" placeholder="confirm password" name="confirm_password" required>
                </div>

                <input type="submit" value="Register">

            </form>
        </div>
        <hr>

        <footer>
            <p>
                Copyright 2017 - k2h
            </p>
        </footer>
    </div>
</body>
</html>
