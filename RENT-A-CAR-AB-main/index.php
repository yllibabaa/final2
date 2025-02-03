<?php
    include_once('sessions.php');

    if(empty($_SESSION['userId'])){
        header('Location:logIn.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent Now - Rent A Car AB</title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
<body>
    <header>
        <div class="header-container">
            <h1>Rent A Car AB</h1>
            <nav>
                <ul>
                    <li><a id="b" href="home.html">Home</a></li>
                    <li><a id="a" href="index.html">Rent Now</a></li>
                    <li><a id="b" href="aboutus.html">About Us</a></li>
                    <li><a id="b" href="cart.html">Cart</a></li>
                    <li><a href="logout.php" style="color:white;font-family:'Arial';font-weight:500; margin-left:700px;">Log Out</a></li>

                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <div class="car">
            <img id="golf-img" src="img/golf7.png" alt="Car 1">
            <h2>Golf 7</h2>
            <p>Volkswagen Golf (Mk7) është një makinë e segmentit C. Është gjenerata e shtatë në serinë Golf dhe pasardhësi i Golf Mk6.</p>
            <p>Qmimi i Rentit: €45/day</p>
            <button class="rent-btn" data-item="Golf 7" data-price="45">Merr Tani</button>
        </div>
    <ul id="cart-items"></ul>
    <div id="shopping-cart" style="display: none;">Your shopping cart</div>

        <div class="car">
            <img id="audi-img" src="img/audi a7.png" alt="Car 2">
            <h2>Audi A7</h2>
            <p>"Audi A7 është një kombinim i shkëlqyeshëm i elegancës, performancës dhe teknologjisë së përparuar.</p>
            <p>Qmimi i Rentit: €50/day</p>
             <button class="rent-btn" data-item="Audi A7" data-price="50">Merr Tani</button>
        </div>


             <div class="car">
            <img id="BMW-img" src="img/BMW M4.png" alt="Car 3">
            <h2>BMW M4</h2>
            <p>BMW M4 është një përfaqësues i shkëlqyeshëm i serisë M të BMW, e cila është e njohur për performancën e lartë dhe përvojën e drejtimit të emocionueshme.</p>
            <p>Qmimi i Rentit: €70/day</p>
             <button class="rent-btn" data-item="BMW M4" data-price="70">Merr Tani</button>
        </div>



             <div class="car">
            <img id="mercedes-img" src="img/mercedes benz.png" alt="Car 4">
            <h2>Mercedes Benz</h2>
            <p>Mercedes-Benz është sinonim me luks, inovacion dhe performancë të shkëlqyer.</p>
            <p>RQmimi i Rentit: €70/day</p>
             <button class="rent-btn" data-item="Mercedes Benz" data-price="70">Merr Tani</button>
        </div>



             <div class="car">
            <img id="opel-img" src="img/opel.png" alt="Car 5">
            <h2>Opel</h2>
            <p>"Audi A7 është një kombinim i shkëlqyeshëm i elegancës, performancës dhe teknologjisë së përparuar.</p>
            <p>Qmimi i Rentit: €30/day</p>
             <button class="rent-btn" data-item="Opel" data-price="30">Merr Tani</button>
        </div>

         <div class="car">
            <img id="GCLASS-img" src="img/GCLASS.png" alt="Car 6">
            <h2>Mercedes Benz G Class</h2>
            <p>Mercedes-Benz G-Class, e njohur ndryshe si "G-Wagen" ose "G-Wagon", është një ikonë në botën e makinave, e dizajnuar për t'u përballur me sfidat më të rënda të terrenit dhe për të ofruar një përvojë të jashtëzakonshme të drejtimit.</p>
            <p>Qmimi i Rentit: €50/day</p>
             <button class="rent-btn" data-item="Mercedes Benz G Class" data-price="50">Merr Tani</button>
        </div>


        

    </div>

    <script src="JS/main.js"></script>
</body>
</html>
