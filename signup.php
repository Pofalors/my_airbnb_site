<!-- filepath: /C:/xampp/htdocs/4η εργασία/signup.php -->
<html>

<head>
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
</head>
<body>

<div class="container">
    <h2>Εγγραφή Πελάτη</h2>
    <form class="signup-form" action="includes/signup.inc.php" method="POST">
        <input type="text" name="first_name" placeholder="Firstname">
        <input type="text" name="last_name" placeholder="Lastname">
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="uid" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <button type="submit" name="submit">Sign Up</button>
    </form>
    <a href="login_scr.php">Back</a>
</div>

</body>
</html>