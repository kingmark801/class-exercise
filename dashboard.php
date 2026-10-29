<?php
$conn = new mysqli("localhost", "root", "", "my_contacts_");
$result = $conn->query("SELECT * FROM contact1");
?>
<!DOCTYPE html>
<html>
<head><title>Dashboard</title></head>
<body>
  <h1>Dashboard</h1>
  <table border="1" cellpadding="8">
    <tr><th>Id</th><th>Name</th><th>Email</th><th>Contact</th></tr>
    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
      <td><?= $row['id'] ?></td>
      <td><?= htmlspecialchars($row['name']) ?></td>
      <td><?= htmlspecialchars($row['email']) ?></td>
      <td><?= htmlspecialchars($row['contact']) ?></td>
    </tr>
    <?php endwhile; ?>
  </table>
  <p><a href="index.php">Add New Contact</a></p>
</body>
</html>