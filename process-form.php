$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$file = fopen("data.csv", "a");

$data = array($name, $email, $message);
fputcsv($file, $data);

fclose($file);

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $file = fopen("data.csv", "a");
  $data = array($name, $email, $message);
  fputcsv($file, $data);
  fclose($file);

  // Redirect the user back to the form page after submission
  header("Location: index.html?success=true");
}
