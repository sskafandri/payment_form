<?php

try{
    $conn = new PDO("mysql:host=localhost;dbname=testDB", 'root','');
    $query = "INSERT INTO users VALUES (NULL, :name, :number, :month, :year, :cvc)";
        
    $msg = $conn->prepare($query);

    $msg->execute(['name' => $_POST['card-name'],
                  'number' => $_POST['card-number'],
                    'month' => $_POST['card-expiry-month'],
                      'year' => $_POST['card-expiry-year'],
                     'cvc' => $_POST['card-cvc']]);


    header("Location: index.html");
}
catch (PDOException $e){
    echo $e;
}

?>
