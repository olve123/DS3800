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
SELECT * FROM drinks;


SQL;
    $query =$db-> query($statement);
    $names = $db->query($statement);
    $prices = $db->query($statement);

    while($r = $query->fetch(PDO::FETCH_OBJ)){
        echo '<div class = "drink">';
        echo $r ->drinkName . " ";
        echo "Pris : ";
        echo $r->price . "<br>";
        echo "</div>";
    }



    ?>

    </body>
    </html>
