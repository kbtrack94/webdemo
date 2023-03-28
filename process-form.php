<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Process and store the form data here, such as inserting it into a database or sending it via email.

  // Open the CSV file for writing
  $file = fopen("form_data.csv", "a");

  // Write the form data to the file
  fputcsv($file, array($name, $email, $message));

  // Close the file
  fclose($file);
}
?>
