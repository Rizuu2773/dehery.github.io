<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Account</title>
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
                    <li><a href="read.php">View Accounts</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <h2>Update Game Account</h2>
        <?php
include 'db/config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM accounts WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $game_name = $_POST['game_name'];
    $account_name = $_POST['account_name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $contact_me = $_POST['contact_me']; // Ambil nilai 'contact_me' dari form

    $sql = "UPDATE accounts SET game_name='$game_name', account_name='$account_name', price='$price', description='$description', contact_me='$contact_me' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Account updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

        <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <label for="game_name">Game Name:</label>
            <input type="text" id="game_name" name="game_name" value="<?php echo $row['game_name']; ?>" required>
            
            <label for="account_name">Account Name:</label>
            <input type="text" id="account_name" name="account_name" value="<?php echo $row['account_name']; ?>" required>
            
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" value="<?php echo $row['price']; ?>" step="0.01" required>
            
            <label for="description">Description:</label>
            <textarea id="description" name="description"><?php echo $row['description']; ?></textarea>

            <label for="contact_me">Contact Me:</label>
            <input type="number" id="contact_me" name="contact_me" value="<?php echo $row['price']; ?>" step="0.01" required>

            
            <input type="submit" value="Update Account">
        </form>
    </div>
</body>
</html>
