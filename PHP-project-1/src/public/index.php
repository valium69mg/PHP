<?php
$database = 'php1';
$table = 'Persons';
$db = new PDO('mysql:host=db;dbname=php1','root','root',
    [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ]
);

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



