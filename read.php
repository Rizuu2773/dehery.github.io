<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=5.0">
    <title>View Accounts</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1>Game Account Store</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="insert.php">Add Account</a></li>
                    <li><a href="read.php" class="current">View Available Accounts</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <h2>Available Game Accounts</h2>
        <?php
include 'db/config.php';

$sql = "SELECT * FROM accounts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='5'>
            <tr>
                <th>ID</th>
                <th>Game Name</th>
                <th>Account Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Contact Me</th>
                <th>Actions</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['game_name']}</td>
                <td>{$row['account_name']}</td>
                <td>{$row['price']}</td>
                <td>{$row['description']}</td>";
        
        // Cek apakah 'contact_me' ada dalam $row sebelum mencetak nilainya
        if (isset($row['contact_me'])) {
            echo "<td>{$row['contact_me']}</td>";
        } else {
            echo "<td>N/A</td>"; // Atau pesan lain yang sesuai jika 'contact_me' tidak ada
        }
        
        echo "<td>
                <a href='update.php?id={$row['id']}'>Edit</a>
                <a href='delete.php?id={$row['id']}'>Delete</a>
              </td>
              </tr>";
    }
    
    echo "</table>";
} else {
    echo "No accounts found.";
}

$conn->close();
?>
    </div>
</body>
</html>
