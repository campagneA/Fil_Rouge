<?php
session_start();
include_once(__DIR__ . "/../view/boutique.php");

try {
    boutique();
} catch (Exception $e) {
    echo $e->getMessage();
}
