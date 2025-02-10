<!-- filepath: /C:/xampp/htdocs/4η εργασία/login_scr.php -->
<html>

<head>
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
    <script>
        window.addEventListener("load", () => {
        // Προσθήκη event listener για το κουμπί τυχαίας προσφοράς
        const offerButton = document.getElementById("offerButton");
        const offers = [
            "Έκπτωση 10% για διαμονή άνω των 3 ημερών.",
            "Δωρεάν πρωινό για όλη τη διάρκεια της διαμονής σας.",
            "Έκπτωση 20% για κρατήσεις που γίνονται τουλάχιστον ένα μήνα νωρίτερα.",
            "Δωρεάν αναβάθμιση δωματίου σε Deluxe για διαμονή άνω των 5 ημερών.",
        ];

        offerButton.addEventListener("click", () => {
            const randomIndex = Math.floor(Math.random() * offers.length);
            alert(offers[randomIndex]);
        });
    });
    </script>
</head>
<body>

<div class="container">
    <h2>Σύνδεση πελάτη</h2>
    <form action="includes/login.inc.php" method="POST">
        <input type="text" name="uid" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <button id="submit" type="submit" name="submit">log in</button>
        <button id="offerButton">Δείτε μια τυχαία προσφορά!</button>
    </form>
    <a href="signup.php">Sign up</a>
</div>

</body>
</html>