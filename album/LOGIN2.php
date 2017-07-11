<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header("index.php");
}

require 'DATABASE2.php';

if (!empty($_POST['email']) && !empty($_POST['password'])):

    $records = $conn->prepare('SELECT id,email,password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {

        $_SESSION['user_id'] = $results['id'];
        header("Location: /");
    } else {
        $message = 'Sorry, Email/password do not match';
    }

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
                <li class="tab"><a class="to_login" href="REGISTER2.php">You don't have account. Register here!</a></li>
            </ul>
            <?php if (!empty($message)): ?>
                <p><?= $message ?></p>
            <?php endif; ?>

            <h1>Login</h1>


            <form action="home.php" method="POST">
                <div class="field-wrap">
                    <input type="text" placeholder="Enter your email" name="email" required>
                </div>
                <div class="field-wrap">
                    <input type="password" placeholder="and password" name="password" required>
                </div>
                <input type="submit" value="Enter">

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
