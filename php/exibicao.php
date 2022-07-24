<html>
<body>
<?php 
$username = "root"; 
$password = "admin"; 
$database = "cadastros"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM cadastros";

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["nome"];
        $field2name = $row["email"];
        $field3name = $row["nascimento"];
        $field4name = $row["telefone"];

        echo '<tr>
                  <td>'.$field1name.'</td>
                  <td>'.$field2name.'</td>
                  <td>'.$field3name.'</td>
                  <td>'.$field4name.'</td>
            </tr>';
    }
    $result->free();
} 
?>
</body>
</html>