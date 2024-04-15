<?php
$database = 'php1';
$table = 'Persons';
$db = new PDO('mysql:host=db;dbname=php1','root','root',
    [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ]
);
// PREPARED STATEMENTS 
try {
    $query = 'SELECT * FROM Persons';
    $stmt = $db->query($query);

    foreach($stmt->fetchAll() as $user) {
        echo '<pre>';
        var_dump($user);
        echo '<pre>';
    }
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), $e->getCode());
}

// PDO STATEMENTS WITH NAMED PARAMETERS 
try {
    $name = 'Carlos';
    $query = 'SELECT * FROM Persons WHERE FirstName = ?';
    $stmt = $db->prepare($query);
    $stmt->execute([$name]);


    foreach($stmt->fetchAll() as $user) {
        echo '<pre>';
        var_dump($user);
        echo '<pre>';
    }
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), $e->getCode());
}
// PDO WITH NAMED 
try {
    $name = 'Vicky';
    $query = 'SELECT * FROM Persons WHERE FirstName = :name';
    $stmt = $db->prepare($query);
    $stmt->execute(['name' => $name]);


    foreach($stmt->fetchAll() as $user) {
        echo '<pre>';
        var_dump($user);
        echo '<pre>';
    }
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), $e->getCode());
}


