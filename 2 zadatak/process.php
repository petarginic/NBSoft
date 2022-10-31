<?php
    header('content-type: application/json; charset=utf-8');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS');
    header('Access-Control-Allow-Headers: Content-Type');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["firstname"]) && isset($_POST["lastname"])) {
            echo $_POST["firstname"] . " " . $_POST["lastname"];
            http_response_code(200);
            return;
        }
    }
    
    http_response_code(400);
?>
