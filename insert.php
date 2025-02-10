<?php

include "connect.php";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$booking_start_date = isset($_POST['booking_start_date']) ? $_POST['booking_start_date'] : null;
$booking_end_date = isset($_POST['booking_end_date']) ? $_POST['booking_end_date'] : null;
$room_type = isset($_POST['room_type']) ? $_POST['room_type'] : null;
$message = isset($_POST['message']) ? $_POST['message'] : null;
$file_path = '';

if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
    $file_path = 'uploads/' . basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'], $file_path);
}

if ($subject === 'booking') {
    // Έλεγχος διαθεσιμότητας ημερομηνιών
    $sql_check = "SELECT * FROM contact_form WHERE room_type = '$room_type' AND (booking_start_date <= '$booking_end_date' AND booking_end_date >= '$booking_start_date')";
    $result = $conn->query($sql_check);

    if ($result->num_rows > 0) {
        echo "Οι ημερομηνίες κράτησης δεν είναι διαθέσιμες για το επιλεγμένο δωμάτιο. Παρακαλώ επιλέξτε άλλες ημερομηνίες ή δωμάτιο.";
    } else {
        $sql = "INSERT INTO contact_form (name, email, phone, subject, booking_start_date, booking_end_date, room_type, file_path) VALUES ('$name', '$email', '$phone', '$subject', '$booking_start_date', '$booking_end_date', '$room_type', '$file_path')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
} else {
    $sql = "INSERT INTO contact_form (name, email, phone, subject, message, file_path) VALUES ('$name', '$email', '$phone', '$subject', '$message', '$file_path')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

?>