<doctype html>
    <html>
    <head>
        <title>Restaurant</title>
        <link rel = "stylesheet" type = "text/css" href="main.css">
    </head>

    <body>
    <h1>DRIKKE</h1>

    <?php

    $dsn = 'mysql:dbname=Restaurant;host=localhost;port=3307';
    $username = 'root';
    $password = 'root';
    try{
        $db = new PDO($dsn, $username, $password);
    }
    catch (PDOException $e){
        die("Could not connect to mysql database (mvh Olve)");
    }

    $statement= <<<SQL
SELECT * FROM drikke;


SQL;
    $names = $db->query($statement);
    $prices = $db->query($statement);
    foreach($names->FetchAll() as $name){
        echo '<div id = "drink">';
        echo $name['drinkName']  . '</br>';
        echo "</div>";
    }

    foreach($prices->FetchAll() as $price){
        //echo '<div id = "price">';
        echo $price['Price']  . '</br>';
       // echo "</div>";
    }



    ?>

    </body>
    </html>
