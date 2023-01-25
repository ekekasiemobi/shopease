<?php
    $conn = mysqli_connect('localhost', 'root', '', 'kassydb');
    if (!$conn) {
        echo 'CONNECTION ERROR';
    }
?>