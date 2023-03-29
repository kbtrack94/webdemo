$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$file = fopen("data.csv", "a");

$data = array($name, $email, $message);
fputcsv($file, $data);

fclose($file);

