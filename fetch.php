<?php


if (($_SERVER["CONTENT_TYPE"]) === "application/json") {
    $decoded = json_decode(file_get_contents("php://input"), true);
    echo json_encode($decoded);
}

