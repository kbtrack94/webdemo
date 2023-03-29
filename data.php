<?php
$file = fopen("data.csv", "r");
$data = array();
while (($line = fgetcsv($file)) !== false) {
  $data[] = $line;
}
fclose($file);
?>

<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Message</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $row): ?>
      <tr>
        <td><?= htmlspecialchars($row[0]) ?></td>
        <td><?= htmlspecialchars($row[1]) ?></td>
        <td><?= htmlspecialchars($row[2]) ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
