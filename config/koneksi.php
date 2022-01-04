<?php

$db = mysqli_connect("localhost", "root", "", "db_kalkulator");

if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
