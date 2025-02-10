<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Επικοινωνία</title>
    <link rel="stylesheet" href="mmb.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script>
        // Συνάρτηση για την εναλλαγή της ορατότητας των πεδίων της φόρμας με βάση την επιλογή θέματος
        function toggleFields() {
            var subject = document.getElementById("subject").value;
            var bookingDateField = document.getElementById("booking_date_field");
            var roomTypeField = document.getElementById("room_type_field");
            var messageField = document.getElementById("message_field");

            if (subject === "booking") {
                bookingDateField.style.display = "block";
                roomTypeField.style.display = "block";
                messageField.style.display = "none";
            } else {
                bookingDateField.style.display = "none";
                roomTypeField.style.display = "none";
                messageField.style.display = "block";
            }
        }
    </script>
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
</head>
<body>
    <div class="loader"></div>
    <header>
    <img class="logo" src="images/logo1.png" alt="Nice and Cosy Apartments">
        <nav>
            <ul>
                <li><a href="mmb.php">Αρχική</a></li>
                <li><a href="contact.php">Επικοινωνία</a></li>
            </ul>
        </nav>
        <div class="user-info-container">
            <div class="user-info">
                <img src="images/avatar.png" alt="Avatar" class="avatar">
                <span class="username"><?php echo isset($_SESSION['u_username']) ? $_SESSION['u_username'] : 'Guest'; ?></span>
            </div>
            <a href="logout.php" class="logout-button">Logout</a>
        </div>
    </header>

    <main>
        <section id="contact-form">
            <h1>Φόρμα Επικοινωνίας</h1>
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <label for="name">Όνομα:</label>
                <input type="text" id="name" name="name" aria-label="Όνομα χρήστη" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" aria-label="Διεύθυνση email" required>
                <label for="phone">Τηλέφωνο:</label>
                <input type="tel" id="phone" name="phone" placeholder="+3069..." required aria-label="Αριθμός τηλεφώνου">
                <label for="subject">Θέμα:</label>
                <select id="subject" name="subject" aria-label="Επιλογή θέματος" onchange="toggleFields()">
                    <option value="general">Γενικές Πληροφορίες</option>
                    <option value="booking">Κρατήσεις</option>
                    <option value="support">Υποστήριξη</option>
                </select>
                <div id="booking_date_field" style="display: none;">
                    <label for="booking_start_date">Άφιξη:</label>
                    <input type="date" id="booking_start_date" name="booking_start_date" aria-label="Άφιξη" min="<?php echo date('Y-m-d'); ?>">
                    <br>
                    <label for="booking_end_date">Αποχώρηση:</label>
                    <input type="date" id="booking_end_date" name="booking_end_date" aria-label="Αποχώρηση" min="<?php echo date('Y-m-d'); ?>">
                </div>
                <div id="room_type_field" style="display: none;">
                    <label for="room_type">Επιλογή Δωματίου:</label>
                    <select id="room_type" name="room_type" aria-label="Επιλογή Δωματίου">
                        <option value="standard">Δωμάτιο Standard</option>
                        <option value="deluxe">Δωμάτιο Deluxe</option>
                    </select>
                </div>
                <div id="message_field">
                    <label for="message">Μήνυμα:</label>
                    <textarea id="message" name="message" rows="4" aria-label="Μήνυμα προς τον διαχειριστή"></textarea>
                </div>
                <label for="file">Επιλογή αρχείου:</label>
                <input type="file" id="file" name="file" aria-label="Επιλογή αρχείου">
                <button type="submit" aria-label="Υποβολή φόρμας επικοινωνίας">Υποβολή</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Σπανός Corporation | Όλα τα Δικαιώματα Διατηρούνται</p>
    </footer>
</body>
</html>