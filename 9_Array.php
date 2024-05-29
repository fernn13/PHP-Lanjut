<?php
// Array dengan nama dan umur
$data = array(
    array("nama" => "Angger", "umur" => 15),
    array("nama" => "Irsyad", "umur" => 60),
    array("nama" => "Rangga", "umur" => 35),
    array("nama" => "Noval", "umur" => 20),
    array("nama" => "Septito", "umur" => 28),
    array("nama" => "Laduni", "umur" => 32),
    array("nama" => "Dimas", "umur" => 27),
    array("nama" => "Fahrul", "umur" => 22),
    array("nama" => "Amrizal", "umur" => 40),
    array("nama" => "Dion", "umur" => 26),
    array("nama" => "Alfindo", "umur" => 29),
    array("nama" => "Haikal", "umur" => 33),
    array("nama" => "Fernanda", "umur" => 24),
    array("nama" => "Freza", "umur" => 31),
    array("nama" => "Hikmal", "umur" => 37)
);

// Konversi array menjadi JSON
$json_data = json_encode($data, JSON_PRETTY_PRINT);

// Tampilkan JSON
echo $json_data;