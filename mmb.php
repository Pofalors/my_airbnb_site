<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nice and Cosy Apartments</title>
    <link rel="stylesheet" href="mmb.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script>
            // Συνάρτηση για να κρύβει το loader όταν έχει φορτώσει η σελίδα
            window.addEventListener("load", () => {
            const loader = document.querySelector(".loader");

            loader.classList.add("loader--hidden");

            loader.addEventListener("transitionend", () => {
                document.body.removeChild(loader);
            });
        });
    </script>
    <script defer src="scroll.js"></script>
</head>
<body>
    <div class="loader"></div>
    <header>
        <img class="logo" src="images/logo1.png" alt="Nice and Cosy Apartments">
        <nav>
            <ul>
                <li><a href="mmb.php">Αρχική</a></li>
                <li><a href="#rooms">Τα Δωμάτια</a></li>
                <li><a href="#services">Υπηρεσίες</a></li>
                <li><a href="#about">Σχετικά με Εμάς</a></li>
                <li><a href="contact.php">Επικοινωνία</a></li>
            </ul>
        </nav>
        <div class="user-info-container">
            <div class="user-info">
                <?php
                // Έναρξη συνεδρίας και εμφάνιση πληροφοριών χρήστη αν είναι συνδεδεμένος
                session_start();
                if (isset($_SESSION['u_username'])) {
                    echo '<img src="images/avatar.png" alt="Avatar" class="avatar">';
                    echo '<span class="username">' . htmlspecialchars($_SESSION['u_username']) . '</span>';
                }
                ?>
            </div>
            <?php
            // Εμφάνιση κουμπιού αποσύνδεσης αν ο χρήστης είναι συνδεδεμένος
            if (isset($_SESSION['u_username'])) {
                echo '<a href="logout.php" class="logout-button">Logout</a>';
            }
            ?>
        </div>
    </header>

    <section class="hidden" id="rooms">
        <h1>Comfort is the key</h1>
        <p>Ανακαλύψτε τα διαθέσιμα δωμάτια για τη διαμονή σας στην πόλη μας. Κάθε δωμάτιο προσφέρει άνεση και υπηρεσίες για μια ευχάριστη διαμονή.</p>

        <div class="room">
            <img src="images/room1.jpg" alt="Δωμάτιο 1">
            <div class="room-info">
                <h2>Δωμάτιο Standard</h2>
                <p>Μοντέρνο και άνετο δωμάτιο, ιδανικό για 2 άτομα.</p>
                <p>Τιμή ανά διανυκτέρευση: 35€</p>
                <a href="contact.php" class="button">Κάντε Κράτηση</a>
            </div>
        </div>

        <div class="room">
            <img src="images/room2.jpg" alt="Δωμάτιο 2">
            <div class="room-info">
                <h2>Δωμάτιο Deluxe</h2>
                <p>Πολυτελές δωμάτιο με όλες τις ανέσεις ιδανικό</p>
                <p>για οικογένειες.</p>
                <p>Τιμή ανά διανυκτέρευση: 50€</p>
                <a href="contact.php" class="button">Κάντε Κράτηση</a>
            </div>
        </div>
    </section>

    <section class="hidden" id="services">
        <h1>Υπηρεσίες</h1>
        <table>
            <thead>
                <tr>
                    <th>Υπηρεσία</th>
                    <th>Περιγραφή</th>
                    <th>Κόστος</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Πρωινό</td>
                    <td>Πλούσιο και φρέσκο πρωινό</td>
                    <td>5€</td>
                </tr>
                <tr>
                    <td>WiFi</td>
                    <td>Γρήγορη και αξιόπιστη σύνδεση</td>
                    <td>Δωρεάν</td>
                </tr>
                <tr>
                    <td>Καθαρισμός</td>
                    <td>Καθημερινός καθαρισμός δωματίου</td>
                    <td>7€ (περιλαμβάνεται στην τελική τιμή)</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section class="hidden" id="about">
        <h1>Σχετικά με Εμάς</h1>
        <p>Η επιχείρησή μας παρέχει άνετα και οικονομικά δωμάτια για βραχυπρόθεσμη μίσθωση σε τουρίστες και επισκέπτες της πόλης μας. Με έμφαση στην ποιότητα και την εξυπηρέτηση, οι επισκέπτες μας απολαμβάνουν μια εξαιρετική διαμονή. Πολύ κοντά στο κέντρο της πόλης και σε στάση λεωφορείου και με μεγάλο και άνετο Parking!</p>
        <img src="images/about.png" alt="Το κτίριο μας">
    </section>

    <section class="hidden" id="contact">
        <h1>Επικοινωνία</h1>
        <p>Για περισσότερες πληροφορίες ή για να κάνετε κράτηση, παρακαλούμε επικοινωνήστε μαζί μας!</p>
        <ul>
            <li>Email: <a href="mailto:Spanos560@gmail.com">Spanos560@gmail.com</a></li>
            <li>Location: <a href="https://www.google.com/maps/place/Αντίοχου+14,+Λάρισα+413+35,+Ελλάδα/@39.6199759,22.4043774,17z/data=!3m1!4b1!4m6!3m5!1s0x135888b5bd1bddf5:0xb7b70f2e92e735ca!8m2!3d39.6199759!4d22.4069577!16s%2Fg%2F11q2jrk_j5?entry=ttu&g_ep=EgoyMDI0MTExMy4xIKXMDSoASAFQAw%3D%3D">Αντιόχου 14, Λάρισα</a></li>
            <li>Τηλέφωνο: (+30) 2411101957</li>
        </ul>
    </section>

    <footer>
        <p>&copy; 2025 Σπανός Corporation | Όλα τα Δικαιώματα Διατηρούνται</p>
    </footer>
</body>
</html>
