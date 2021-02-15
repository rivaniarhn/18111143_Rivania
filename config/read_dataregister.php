<?php
require_once 'config/koneksi.php';

try{
    $sql = 'SELECT * FROM `tabel_register`';

    $q = $database_connection -> query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
}catch(PDOException $e){
    die("Could not connet to the database $dbname :" . $e->getMessage());
}

?>