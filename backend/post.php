<?php

// フロント・バックエンドでのバリデーションやnullチェックなどは端折っています。
if(isset($_POST)) {
    header('Content-type: application/json; charset=utf-8');
    echo json_encode(['text' => $_POST['post_test']]);
}