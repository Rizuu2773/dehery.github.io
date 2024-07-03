<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Account Store</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <style>
        .slick-prev:before,
        .slick-next:before {
            color: black;
        }

        .slider {
            width: 80%;
            margin: 0 auto;
        }

        .slider img {
            width: 100%;
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
                    <li><a href="insert.php">Add Account</a></li>
                    <li><a href="read.php">View Available Accounts</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <h2>Welcome to Rizz De Hery Game Account Store</h2>
        <p>Buy and Sell Game Accounts Easily.</p>
        <div class="slider">
            <img src="/gameaccountstore/game_account_store/img/honkai-star-rail.png" alt="Game Account Store">
            <img src="/gameaccountstore/game_account_store/img/arknights.jpe" alt="Game Account Store"> 
            <img src="/gameaccountstore/game_account_store/img/Epic-Seven.jpg" alt="Game Account Store">
            <img src="/gameaccountstore/game_account_store/img/fgo-na.jpg" alt="Game Account Store">
            <img src="/gameaccountstore/game_account_store/img/genshin-impact.jpg" alt="Game Account Store">
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.slider').slick({
                autoplay: true,
                autoplaySpeed: 2000,
                dots: true,
                arrows: true,
                infinite: true,
                speed: 500,
                slidesToShow: 1,
                slidesToScroll: 1,
                adaptiveHeight: true
            });
        });
    </script>
</body>
</html>
