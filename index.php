<?php
$conn = new mysqli(
    getenv("MYSQLHOST"),
    getenv("MYSQLUSER"),
    getenv("MYSQLPASSWORD"),
    getenv("MYSQLDATABASE"),
    getenv("MYSQLPORT")
);

if ($conn->connect_error) {
    http_response_code(500);
    die("Database connection failed");
}

$conn->query("
CREATE TABLE IF NOT EXISTS bme_readings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ts TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    temperature_C FLOAT,
    humidity_rh FLOAT,
    pressure_hPa FLOAT,
    gas_resistance_ohm FLOAT,
    heat_index_C FLOAT,
    water_level_m FLOAT,
    installation_height_m FLOAT
)
");

echo "CalamiTech API is running";
