<?php

include '../database/pharmacy.php';

$pharmacy = new Pharmacy();

$action =  $_GET['action'];

if ($action == "store") {
    $pharmacy->store(
        $_POST['name'],
        $_POST['description'],
        $_POST['stock'],
        $_POST['price'],
        $_POST['category_id'],
        $_POST['expired_at'],
        $_POST['created_at'],
        $_POST['updated_at'],
        $_POST['deleted_at']
    );
    return header("location:../");
}

?>