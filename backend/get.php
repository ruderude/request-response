<?php

if(isset($_GET)) {
    header('Content-type: application/json; charset=utf-8');
    echo json_encode(['text' => $_GET['get_test']]);
}