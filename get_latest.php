<?php
$conn = new mysqli(
    getenv("MYSQLHOST"),
    getenv("MYSQLUSER"),
    getenv("MYSQLPASSWORD"),
    getenv("MYSQLDATABASE"),
    getenv("MYSQLPORT")
);

$res = $conn->query("
    SELECT *
    FROM bme_readings
    ORDER BY ts DESC
    LIMIT 1
");

echo json_encode($res->fetch_assoc());
