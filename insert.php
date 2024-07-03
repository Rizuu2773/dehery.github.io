<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Account</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Optional: CSS untuk membuat tampilan form lebih rapi */
        form {
            max-width: 600px;
            margin: auto;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type=text], input[type=number], textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }
    </style>
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
                    <li><a href="insert.php" class="current">Add Account</a></li>
                    <li><a href="read.php">View Available Accounts</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <h2>Add New Game Account</h2>
        <form action="insert.php" method="POST">
            <label for="game_name">Game Name:</label>
            <input type="text" id="game_name" name="game_name" required>
            
            <label for="account_name">Account Name:</label>
            <input type="text" id="account_name" name="account_name" required>
            
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" step="0.01" required>
            
            <label for="description">Description:</label>
            <textarea id="description" name="description"></textarea>

            <label for="contact_me">Contact Me:</label>
            <input type="number" id="contact_me" name="contact_me" step="0.01" required>

            <input type="submit" value="Add Account">
        </form>
    </div>
    <?php
    include 'db/config.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $game_name = $_POST['game_name'];
        $account_name = $_POST['account_name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $contact_me = $_POST['contact_me'];

        $sql = "INSERT INTO accounts (game_name, account_name, price, description, contact_me) VALUES ('$game_name', '$account_name', '$price', '$description', '$contact_me')";

        if ($conn->query($sql) === TRUE) {
            echo "<p>New account added successfully</p>";
        } else {
            echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
        }

        $conn->close();
    }
    ?>
</body>
</html>
