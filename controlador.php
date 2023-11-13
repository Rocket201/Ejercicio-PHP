<?php
include('material.php');
include('libro.php');
include('dvd.php');

$libro1 = new Libro("La Sombra del Viento", "Carlos Ruiz Zafón", "1234567890", true, 472);
$libro2 = new Libro("Cien años de soledad", "Gabriel García Márquez", "9788401337208", true, 880);
$dvd1 = new DVD("Pulp Fiction", "Quentin Tarantino", "4321098765", true, 118, "Drama");
$dvd2 = new DVD("Inception", "Christopher Nolan", "98745628954", true, 99, "Ciencia Ficción, Acción");
$materiales = [$libro1, $libro2, $dvd1, $dvd2];
require('vista.php');
?>
