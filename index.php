<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8">
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container">
<div class="row">
<h3>My CRUD PHP grid</h3>
<p>
  <a href="create.php" class="btn btn-success">Create</a>
</p>
</div>
<div class="row">
<table class="table table-striped table-bordered">
<thead>
  <tr>
    <th>Nombre</th>
    <th>Correo electrónico </th>
    <th>Móvil</th>
  </tr>
</thead>
<tbody>
<?php 
include 'database.php';
$pdo = Database::connect();
$sql = 'SELECT * FROM customers ORDER BY id DESC';
foreach ($pdo->query($sql) as $row) {
echo '<tr>';
echo '<td>' . $row['name'] . '</td>';
echo '<td>' . $row['email'] . '</td>';
echo '<td>' . $row['mobile'] . '</td>';
echo '</tr>';
}
Database::disconnect();
?>
</tbody>
</table>
</div>
</div> <!-- /container -->
</body>
</html>