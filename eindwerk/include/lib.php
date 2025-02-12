<?php
session_start();

function isWinkelkarNietLeeg() {
    return !empty($_SESSION['winkelkar']); // Pas dit aan op basis van je winkelkar implementatie
}
?>