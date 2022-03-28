<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shangrilla";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output from database
    ?>
    <table border=1>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Amount</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    
                    
                </tr>
    <?php
  while($row = $result->fetch_assoc()) {
    ?>
        <tr>
            <td>
                <?php echo $row['id'] ?>
            </td>
            <td>
                <?php echo $row['name'] ?>

            </td>
            <td>
                <?php echo $row['amount'] ?>

            </td>
            <td>
               <spam>Edit</spam>
            </td>
            <td>
                <spam>Delete</spam>

            </td>
           
           
        </tr>
    <?php
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>