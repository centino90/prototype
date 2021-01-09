<?php

require_once 'db.php';

$lim = $_POST['limit'];

if(isset($lim)) {
    $stmt = $conn->prepare("SELECT id, first_name, last_name, address FROM users LIMIT :lim");
    $stmt->bindParam(':lim', $lim);
    $stmt->execute();
    // set the resulting array to associative
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    //$data = json_encode($stmt->fetchAll());
}
else {
    header('localhost://index.php');
}